<?php

namespace App\Helper;
use ExpoSDK\Expo;
use ExpoSDK\ExpoMessage;
use App\Models\Token;

class Helper
{
    public static  function sendNotification($data)
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
        $tokens = Token::where('status',0)->limit(90)->get();

        $defaultRecipients = [];
        foreach ($tokens as $token){
            array_push($defaultRecipients, $token->token);
        }

        
        Token::whereIn('token', $defaultRecipients)->update(['status' => 1]);
        
        (new Expo)->send($messages)->to($defaultRecipients)->push();
        
        echo Token::where('status', 1)->count();
    }

}


