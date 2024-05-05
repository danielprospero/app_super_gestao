<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '',
                'ddd' => '11',
                'telefone' => '0000-0000',
                'email' => ''
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'ddd' => '21',
                'telefone' => '0000-0000',
                'email' => ''
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '',
                'ddd' => '31',
                'telefone' => '0000-0000',
                'email' => ''
            ]
        ];

        echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
