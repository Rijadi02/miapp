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

        Expo::addDevicesNotRegisteredHandler(function ($tokens) {
            Token::whereIn('token', $tokens)->update(['active' => 0]);
        });


        // $tokens = Token::all();
        $tokens = Token::where('status', 0)->where('active', 1)->limit(1)->get();

        $defaultRecipients = [];
        foreach ($tokens as $token) {
            array_push($defaultRecipients, $token->token);
        }


        Token::whereIn('token', $defaultRecipients)->update(['status' => 1]);

        (new Expo)->send($messages)->to($defaultRecipients)->push();

        echo Token::where('status', 1)->count();
    }
}
