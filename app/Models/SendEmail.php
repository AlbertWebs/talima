<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mail;

class SendEmail extends Model
{
    public static function SendMessage($to,$MailMessage, $name, $email,$subject){

        $data = array(
            'subject'=>$subject,
            'MailMessage'=>$MailMessage,
        );
        $appName = "Talima Africa Adventures";

        Mail::send('email', $data, function($message) use ($subject,$email,$name,$to,$appName){
            $message->from($email , $name);
            $message->to($to, $appName)->bcc('albertmuhatia@gmail.com')->subject($subject);
        });
    }
}
