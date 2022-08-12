<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class consumirapiController extends Controller
{
    //

    public function adicionarcorridas(Request $request){
        $dados = $request->all();
        $response = Http::post('http://127.0.0.1:8090/corridas',[
        'id_empresa' => 3,
        'id_taxis' => null,
        'status_corrida' => "Solicitada",
        'cliente' => $request->input('cliente'),
        'origem' => $request->input('origem'),
        'destino' => $request->input('destino'),
        ]);
        return redirect('/inicio');
    }
}
