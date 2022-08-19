<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class consumirapiController extends Controller
{
    //o ID dessa empresa cadastrada no banco da api é 1.
    public function adicionarcorridas(Request $request){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $dados = $request->all();
        $response = Http::withHeaders($header)->post('http://127.0.0.1:8090/corridas',[
        'origem' => $request->input('origem'),
        'destino' => $request->input('destino'),
        'id_empresa' => 1,
        'nome_usuario' => "user",
        ]);
        return redirect('/inicio');
    }

}
