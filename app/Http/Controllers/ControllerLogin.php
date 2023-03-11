<?php

namespace App\Http\Controllers;
use App\Models\validacao\Login;


class ControllerLogin extends Login
{
    public function login()
    {   
        return view('client/login');
        $results = $this->sigin();
        var_dump($results);
    }

}
