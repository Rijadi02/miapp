<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MetalsJson;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class MetalsController extends Controller
{
    /**
     * Return today's gold & silver prices in EUR.
     * Fetches from MetalPriceAPI only once per day; subsequent calls return the cached DB record.
     */
    public function getMetals()
    {
        $today = Carbon::today()->toDateString();

        // Return cached record if it already exists for today
        $cached = MetalsJson::where('date', $today)->first();

        if ($cached) {
            return response()->json([
                'json'         => json_decode($cached->json, true),
                'price'        => (float) $cached->price,
                'silver_json'  => json_decode($cached->silver_json, true),
                'silver_price' => (float) $cached->silver_price,
                'date'         => $cached->date,
            ]);
        }

        // Not cached — fetch from MetalPriceAPI
        $response = Http::get('https://api.metalpriceapi.com/v1/latest', [
            'api_key'    => '2ea75a6b43a5d16d43a3c1063cadfc3f',
            'base'       => 'USD',
            'currencies' => 'EUR,XAU,XAG',
        ]);

        if (!$response->successful()) {
            return response()->json([
                'error' => 'Failed to fetch metal prices from MetalPriceAPI.',
            ], 502);
        }

        $data  = $response->json();
        $rates = $data['rates'] ?? [];

        $usdXau = $rates['USDXAU'] ?? null; // oz of gold per 1 USD
        $usdXag = $rates['USDXAG'] ?? null; // oz of silver per 1 USD
        $usdEur = $rates['USDEUR'] ?? null; // EUR per 1 USD

        if (!$usdXau || !$usdXag || !$usdEur || $usdXau == 0 || $usdXag == 0) {
            return response()->json([
                'error' => 'Unexpected API response structure.',
                'raw'   => $data,
            ], 500);
        }

        // 1 oz gold in EUR  = (1 / USDXAU) * USDEUR
        $goldPriceEur   = (1 / $usdXau) * $usdEur;

        // 1 oz silver in EUR = (1 / USDXAG) * USDEUR
        $silverPriceEur = (1 / $usdXag) * $usdEur;

        $rawJson = json_encode($data);

        // Save to database (one row per day)
        $record = MetalsJson::create([
            'json'         => $rawJson,
            'price'        => $goldPriceEur,
            'silver_json'  => $rawJson,    // same API call contains both metals
            'silver_price' => $silverPriceEur,
            'date'         => $today,
        ]);

        return response()->json([
            'json'         => $data,
            'price'        => (float) $record->price,
            'silver_json'  => $data,
            'silver_price' => (float) $record->silver_price,
            'date'         => $record->date,
        ]);
    }
}
