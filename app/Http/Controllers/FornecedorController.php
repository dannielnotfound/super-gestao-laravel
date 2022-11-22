<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'CNPJ' => '00.000.000.000', 
                'ddd' => '11',
                'telefone' => '999999999'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S',
                'CNPJ' => '11.111.111.111',
                'ddd' => '85',
                'telefone' => '99999999'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'CNPJ' => '99.999.999.999',
                'ddd' => '18',
                'telefone' => ''
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
