<?php

namespace App\Service\User;

use App\Interfaces\NotificationInterface;
use App\Models\User;

class EmailService implements NotificationInterface{

    public function notify()
    {
        //here is the code for sending email
        
        return true;
    }
}