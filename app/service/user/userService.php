<?php

namespace App\Service\User;

use App\Models\User;

class UserService{

    public function store($data){
        //some additional data
        $data['channels'] = 5;
        $data['subscribers'] = 8;

        //creation of user
        User::create($data);
    }
}