<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\GoldJson;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class GoldController extends Controller
{
    /**
     * Return today's gold price in EUR, fetching from MetalPriceAPI only if not yet cached.
     */
    public function getGold()
    {
        $today = Carbon::today()->toDateString();

        // Check if we already have today's data in the database
        $cached = GoldJson::where('date', $today)->first();

        if ($cached) {
            return response()->json([
                'json'  => json_decode($cached->json, true),
                'price' => (float) $cached->price,
                'date'  => $cached->date,
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
                'error' => 'Failed to fetch gold price from MetalPriceAPI.',
            ], 502);
        }

        $data  = $response->json();
        $rates = $data['rates'] ?? [];

        // USDXAU = ounces of gold per 1 USD  →  1 oz gold in USD = 1 / USDXAU
        // USDEUR = EUR per 1 USD             →  1 oz gold in EUR = (1 / USDXAU) * USDEUR
        $usdXau   = $rates['USDXAU'] ?? null;
        $usdEur   = $rates['USDEUR'] ?? null;

        if (!$usdXau || !$usdEur || $usdXau == 0) {
            return response()->json([
                'error' => 'Unexpected API response structure.',
                'raw'   => $data,
            ], 500);
        }

        $priceInEur = (1 / $usdXau) * $usdEur;

        // Save to database
        $record = GoldJson::create([
            'json'  => json_encode($data),
            'price' => $priceInEur,
            'date'  => $today,
        ]);

        return response()->json([
            'json'  => $data,
            'price' => (float) $record->price,
            'date'  => $record->date,
        ]);
    }
}
