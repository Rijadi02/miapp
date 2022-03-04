<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Time;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\TimesRequest;
use App\Models\Token;
use Illuminate\Http\Request;
use App\Helper\Helper;

class TimesController extends Controller
{

    public function test()
    {
        $data = ['title' => 'Pyetja e ditës!', 'body' => 'Cilin vend ju ka marrë malli ta takoni?!'];
        Helper::sendNotification($data);
    }

    public function index(int $year)
    {
        $request = request()->validate([
            "location" => "required",
            "country" => "",
            "countryCorrection" => "",
            "manualCorrections" => "",
            "city" => "",
            "token" => ""
        ]);

        if (!Token::where('token', '=', $request['token'])->exists()) {
            $token = new Token();
            $token->token = $request['token'];
            $token->save();
        }


        function exists($request, $value, $set = null)
        {
            return array_key_exists($value, $request) ? $request[$value] : $set;
        }


        $locations = explode(",", $request['location']);
        $country = exists($request, 'country');
        $countryCorrection = exists($request, 'countryCorrection', 0);
        $manualCorrections = exists($request, 'manualCorrections', "0,0,0,0,0,0,0,0,0");
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

                $current_date = sprintf('%s-%s-%s', $year, sprintf("%02d", $time->month), sprintf("%02d", $time->day));

                $local = [
                    "Imsak" => $add_time($time->imsak, $addone, 0),
                    "Sunrise" => $add_time($time->sunrise, $addone, 2),
                    "Dhuhr" => $add_time($time->dhuhr, $addone, 3),
                    "Asr" => $add_time($time->asr, $addone, 4),
                    "Maghrib" => $add_time($time->maghrib, $addone, 5),
                    "Isha" => $add_time($time->isha, $addone, 7),
                ];

                $imsak = $local['Imsak'];
                $sunrise = $local['Sunrise'];

                $fajr_mins = $country != "mk" ? 30 : -30;

                $fajr = date('H:i', strtotime($fajr_mins . " minutes", strtotime($country != "mk" ? $imsak : $sunrise)));

                $data[$current_date] = [
                    "imsak" => $imsak,
                    'fajr' => $fajr,
                    "sunrise" => $sunrise,
                    "dhuhr" => $local['Dhuhr'],
                    "asr" => $local['Asr'],
                    "maghrib" => $local['Maghrib'],
                    "isha" => $local['Isha']
                ];
            }
        } else {
            $response = Http::withOptions(['verify' => false])->get('https://api.aladhan.com/v1/calendar', [
                'latitude' => $locations[0],
                'longitude' => $locations[1],
                'annual' => "true",
                'year' => $year,
                'tune' => $manualCorrections,
                "method" => 3
            ]);

            function formatTime($time)
            {
                return strtotime(explode(" ", $time)[0]);
            };


            $aladhan = $response->json();

            $data = [];

            foreach ($aladhan['data'] as $month => $values) {
                foreach ($values as $value) {

                    $gregorian = $value['date']['gregorian'];
                    $timings = $value['timings'];

                    $current_date = sprintf('%s-%s-%s', $year, sprintf("%02d", $month), $gregorian['day']);

                    $data[$current_date] = [
                        "imsak" => date("H:i", formatTime($timings['Imsak'])),
                        "fajr" => date("H:i", formatTime($timings['Fajr'])),
                        "sunrise" => date("H:i", formatTime($timings['Sunrise'])),
                        "dhuhr" => date("H:i", formatTime($timings['Dhuhr'])),
                        "asr" => date("H:i", formatTime($timings['Asr'])),
                        "maghrib" => date("H:i", formatTime($timings['Maghrib'])),
                        "isha" => date("H:i", formatTime($timings['Isha']))
                    ];
                }
            }
        }



        $request['city'] = $city;

        return [
            "timings" => $data,
            "city" => $city,
            'year' => $year,
            'request' => $request
        ];
    }
}
