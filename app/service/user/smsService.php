<?php

namespace App\Service\User;

use App\Interfaces\NotificationInterface;
use App\Models\User;

class SmsService implements NotificationInterface{

    public function notify()
    {
        //here is the code for sending sms
        
        return true;
    }
}