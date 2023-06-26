<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function cadastrarCondiminioFRM()
    {
        return view('adm.cadastrar-condominio');
    }

    public function cadastrarSindicoFRM()
    {
        return view('adm.cadastrar-sindico');
    }


    public function cadastrarFuncionarioFRM()
    {
        return view('adm.cadastrar-funcionario');
    }

    public function cadastrarMoradorFRM()
    {
        return view('adm.cadastrar-morador');
    }

    public function cadastrarVisitanteFRM()
    {
        return view('adm.cadastrar-visitante');
    }

    public function dashbordPage()
    {
        return view('adm.dashboard');
    }
}
