<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;


abstract class User
{
    public function consulta_funcionario_for_update(){
        $consulta = DB::select('select * from usuario_csg');
        compact('consulta');
        return $consulta;
    }
}
