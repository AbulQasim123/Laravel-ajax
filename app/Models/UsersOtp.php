<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Twilio\Rest\Client;

class UsersOtp extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','user_otp','expire_at'];
    
    public function sendSMS($recieverNumber){
        $message = 'Login OTP is ' .$this->user_otp;
        try {
            $twilio_sid = getenv('TWILIO_SID');
            $twilio_token = getenv('TWILIO_TOKEN');
            $twilio_from = getenv('TWILIO_FROM');
            $client = new Client($twilio_sid,$twilio_token);
            $client->messages->create($recieverNumber,[
                'from' => $twilio_from,
                'body' => $message
            ]);
            info('SMS Sent Successfully.');
        } catch (\Exception $e) {
            return info("Error: " .$e->getMessage());
        }
    }
}
