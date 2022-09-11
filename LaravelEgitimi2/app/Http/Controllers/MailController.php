<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(){
    
        $email="omersefademirc@gmail.com";
        $array=[
            'name'=>'Omer Sefa',
            'surname'=>'DEMİRCİ',
            'date'=>date('Y-m-d')
        ];
        mail::send('mail.hosgeldin',[$array],function($message) use($email){
            $message->subject('Hoşgeldin');
            $message->to($email);
        });

    }
}
