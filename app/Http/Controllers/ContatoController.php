<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Site\Contato;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        $motivo_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contato' => $motivo_contato]);
    }

    public function salvar(Request $request)
    {
        $request->validate([                    
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
        //SiteContato::create($request->all());
    }
}
