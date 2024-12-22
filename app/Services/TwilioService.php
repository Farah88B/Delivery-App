<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected $sid;
    protected $token;
    protected $from;

    public function __construct()
    {
        $this->sid = env('TWILIO_SID');
        $this->token = env('TWILIO_AUTH_TOKEN');
        $this->from = env('TWILIO_PHONE_NUMBER');
    }

    public function sendSMS($to, $message)
    {
        try {
            $client = new Client($this->sid, $this->token);
            $client->messages->create($to, [
                'from' => $this->from,
                'body' => $message,
            ]);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage(); // إرسال رسالة الخطأ عند الفشل
        }
    }
}
