<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesContoller extends Controller
{
    public function Index(Request $request) {
         
        // return $request->get('id');
        // return $request->method();
        // return response('',302,['location' => 'https://google.com']);
        // return redirect('https://google.com');
        $series = [
            'Punisher',
            'Lost',
            'Everybody Hates Chris',
            'Fresh Prince'
        ];

        // compact('series'); serve para compactar a sintaxe:
        // return view('listar-series',compact('series'));
        // o metodo with() fica de uma forma mais Verbosa, melhorando o
        // entendimento da variavel que está sendo declarada.
        
        return view('listar-series')->with('series', $series);
    }
}
