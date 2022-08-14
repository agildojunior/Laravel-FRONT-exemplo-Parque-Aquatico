<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class consumirapiController extends Controller
{
    //o ID dessa empresa cadastrada no banco da api é 1.
    public function adicionarcorridas(Request $request){
        $dados = $request->all();
        $response = Http::post('http://127.0.0.1:8090/corridas',[
        'origem' => $request->input('origem'),
        'destino' => $request->input('destino'),
        'id_empresa' => 1,
        'nome_usuario' => "user",
        ]);
        return redirect('/inicio');
    }
}
