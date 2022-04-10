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


        $tokens = Token::all();
        $defaultRecipients = [];
        foreach ($tokens as $token){
            array_push($defaultRecipients, $token->token);
        }

        $chunks = array_chunk( $defaultRecipients , 90 );
        $i = 0;
        foreach ($chunks as $chunk){
            (new Expo)->send($messages)->to($chunk)->push();
            $i++;
            echo $i;
            sleep(10);
        }
    }

}


