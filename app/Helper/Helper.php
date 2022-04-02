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

        Expo::addDevicesNotRegisteredHandler(function ($tokens) {
            foreach ($tokens as $token){
                $token = Token::where('token', $token)->first()->get();
                $token->created_at = 0;
                $token->save();
            }
        });


        $tokens = Token::all();
        $defaultRecipients = [];
        foreach ($tokens as $token){
            array_push($defaultRecipients, $token->token);
        }
        (new Expo)->send($messages)->to($defaultRecipients)->push();
    }

}


