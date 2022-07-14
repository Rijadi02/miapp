<?php

namespace App\Helper;
use ExpoSDK\Expo;
use ExpoSDK\ExpoMessage;
use App\Models\Token;

class Helper
{
    public function sendNotification($data)
    {
        $messages = [new ExpoMessage($data)];

        /**
         * These recipients are used when ExpoMessage does not have "to" set
         */

        // Expo::addDevicesNotRegisteredHandler(function ($tokens) {
        //     foreach ($tokens as $token){
        //         $token = Token::where('token', $token)->firstOrFail();
        //         $token->created_at = "2022-01-01";
        //         $token->save();
        //     }
        // });


        // $tokens = Token::all();
        $tokens = Token::where('status',0)->get();

        $defaultRecipients = [];
        foreach ($tokens as $token){
            array_push($defaultRecipients, $token->token);
        }

        set_time_limit(1000000);

        $chunks = array_chunk($defaultRecipients , 90);
        $i = 0;
        foreach ($chunks as $chunk){


            Token::whereIn('token', $chunk)->update(['status' => 1]);
         

            // // dd($tokenat);

            (new Expo)->send($messages)->to($chunk)->push();
            $i++;
            echo $i;
            sleep(5);
        }
    }

}


