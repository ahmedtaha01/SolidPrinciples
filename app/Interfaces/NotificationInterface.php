<?php

namespace App\Interfaces;


// what does this iterface do ? it is a RULE or CONTRACT that tells every developer to implement the
// notify function -a must- every time he extends this interface
interface NotificationInterface
{

    public function notify();


}

// so we have figured it now why this principle name is 
// open for extension and closed for modification