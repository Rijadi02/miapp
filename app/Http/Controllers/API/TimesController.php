<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Time;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\TimesRequest;

use Illuminate\Http\Request;

class TimesController extends Controller
{

    public function index(int $year)
    {
        $request = request()->validate([
            "location" => "required",
            "country" => "",
            "countryCorrection" => "",
            "manualCorrections" => "",
            "hijriCorrection" => "",
            "city" => ""
        ]);

        function exists($request, $value, $set = null)
        {
            return array_key_exists($value, $request) ? $request[$value] : $set;
        }


        $locations = explode(",", $request['location']);
        $country = exists($request, 'country');
        $countryCorrection = exists($request, 'countryCorrection', 0);
        $manualCorrections = exists($request, 'manualCorrections', "0,0,0,0,0,0,0,0,0");
        $hijriCorrection = exists($request, 'hijriCorrection');
        $city = exists($request, 'city');

        if (!$city) {
            $response = Http::withOptions(['verify' => false])->get('https://us1.locationiq.com/v1/reverse.php', [
                "key" => "pk.7f8ae0d2b1e9576ae11b2cfedcdfb4a6",
                'lat' => $locations[0],
                'lon' => $locations[1],
                'format' => "json",
            ]);

            $address = $response['address'];
            $con = exists($address, "country", "");

            $code = exists($address, "country_code", "");

            if ($code == "xk" || $code == "al" || $code == "mk") {
                return [
                    "albanian" => true,
                    "country" => $code
                ];
            }

            $town = "";

            if (array_key_exists("city", $address)) {
                $town = $address['city'];
            } else if (array_key_exists("town", $address)) {
                $town = $address['town'];
            } else if (array_key_exists("municipality", $address)) {
                $town = $address['municipality'];
            } else if (array_key_exists("village", $address)) {
                $town = $address['village'];
            } else if (array_key_exists("state", $address)) {
                $town = $address['state'];
            } else if (array_key_exists("region", $address)) {
                $town = $address['region'];
            } else if (array_key_exists("county", $address)) {
                $town = $address['county'];
            }

            $city = $town;

            if ($town != "" && $con != "") {
                $city = $city . ", " . $con;
            } else if ($con != "") {
                $city =  $con;
            } else {
                $city = "Nuk është gjetur qyteti!";
            }
        }

        $local = [];

        if ($country) {
            $add_time = function ($time, $value, $manual) use ($countryCorrection, $manualCorrections) {
                $minutes =  $countryCorrection + intval(explode(",", $manualCorrections)[$manual]);
                return date('H:i', strtotime($value . ' hour ' . $minutes . " minutes", strtotime($time)));
            };

            $tz = new \DateTimeZone('Europe/Paris');
            $transition = $tz->getTransitions(strtotime('1/1/2022'), strtotime('12/31/2022'));

            $march = date("d", strtotime($transition[1]['time']));
            $october = date("d", strtotime($transition[2]['time']));

            $times = Time::where('country', $country)->get();

            foreach ($times as $time) {
                $addone = 0;

                if ($time->month == "3" && $time->day >= $march) $addone = 1;
                if ($time->month == "10" && $time->day >= $october) $addone = -1;

                $local[sprintf('%s-%s-%s', $year, sprintf("%02d", $time->month), sprintf("%02d", $time->day))] = [
                    "Imsak" => $add_time($time->imsak, $addone, 0),
                    "Sunrise" => $add_time($time->sunrise, $addone, 2),
                    "Dhuhr" => $add_time($time->dhuhr, $addone, 3),
                    "Asr" => $add_time($time->asr, $addone, 4),
                    "Maghrib" => $add_time($time->maghrib, $addone, 5),
                    "Isha" => $add_time($time->isha, $addone, 7),
                ];
            }
        }

        $response = Http::withOptions(['verify' => false])->get('https://api.aladhan.com/v1/calendar', [
            'latitude' => $locations[0],
            'longitude' => $locations[1],
            'annual' => "true",
            'year' => $year,
            'tune' => $manualCorrections,
            'adjustment' => $country ? $hijriCorrection + 1 : $hijriCorrection,
        ]);

        $aladhan = $response->json();

        $data = [];
        $white_days = [];

        foreach ($aladhan['data'] as $month => $values) {
            foreach ($values as $value) {

                $gregorian = $value['date']['gregorian'];
                $hijri = $value['date']['hijri'];
                $timings = $value['timings'];

                $current_date = sprintf('%s-%s-%s', $year, sprintf("%02d", $month), $gregorian['day']);

                if ($hijri['day'] == "13" || $hijri['day'] == "14" || $hijri['day'] == "15") {
                    array_push($white_days, $current_date);
                }

                if ($country) {
                    $data[$current_date] = [
                        "imsak" => $local[$current_date]['Imsak'],
                        "sunrise" => $local[$current_date]['Sunrise'],
                        "dhuhr" => $local[$current_date]['Dhuhr'],
                        "asr" => $local[$current_date]['Asr'],
                        "maghrib" => $local[$current_date]['Maghrib'],
                        "isha" => $local[$current_date]['Isha'],
                        "hijri" => $hijri['date']
                    ];
                } else {
                    $data[$current_date] = [
                        "imsak" => date("H:i", strtotime($timings['Imsak'])),
                        "fajr" => date("H:i", strtotime($timings['Fajr'])),
                        "sunrise" => date("H:i", strtotime($timings['Sunrise'])),
                        "dhuhr" => date("H:i", strtotime($timings['Dhuhr'])),
                        "asr" => date("H:i", strtotime($timings['Asr'])),
                        "maghrib" => date("H:i", strtotime($timings['Maghrib'])),
                        "isha" => date("H:i", strtotime($timings['Isha'])),
                        "hijri" => $hijri['date']
                    ];
                }
            }
        }

        return ["timings" => $data, "white_days" => $white_days, "city" => $city, 'year' => $year];
    }
}