<?php

namespace App\Service\User;

use App\Interfaces\UserUpdateInterface;

class UpdateService implements UserUpdateInterface
{
    public function update(){
        //update user
    }
}
// you should bind the interface to the class in the AppServiceProvider