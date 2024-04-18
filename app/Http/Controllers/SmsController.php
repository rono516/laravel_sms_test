<?php

namespace App\Http\Controllers;
use NotificationChannels\AfricasTalking\AfricasTalkingMessage;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function send_sms(){
    try {
        return (new AfricasTalkingMessage())
                    ->content('SMS message content')
                    ->from("From")
                    ->to("254792009556");
    } catch (\Throwable $th) {
        echo $th;
    }
        // dd($response);
        // $response = return new AfricasTalkingMessage()->content('Here');

    }
}
