<?php

namespace App\Models\validacao;

use Illuminate\Support\Facades\DB;



abstract class Login    
{
    public function sigin()
    {
        $sql = 
        DB::select("SELECT u.id_usuario_sabium
            ,u.id_tipo_usuario
            ,t.descricao as tipo_usuario
            ,us.* 
        FROM usuario_csg u 
        left join usuario us on us.idusuario = u.id_usuario_sabium
        left join tipo_usuario t on t.id = u.id_tipo_usuario
        WHERE u.usuario = 'lucas.santos'
        AND u.senha = 'senha'");
        compact('sql');
        return $sql;
    }
}
