<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function cadastrarCondiminioFMR()
    {
        return view('adm.cadastrar-condominio');
    }

    public function cadastrarSindicoFMR()
    {
        return view('adm.cadastrar-sindico');
    }

    public function cadastrarMoradorFRM()
    {
    }

    public function cadastrarFuncionarioFRM()
    {
        return view('adm.cadastrar-funcionario');
    }
}
