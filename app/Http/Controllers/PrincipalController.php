<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;

class PrincipalController extends Controller
{
    public function principal(){
        $motivo_contatos = MotivoContato::all();
        
        $titulo = "Home";
        return view('site.principalIndex', compact('titulo'), ['motivo_contatos' => $motivo_contatos]);
    }
}
