<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use App\Http\Requests\Login\ResetEmailRequest;
use App\Http\Requests\Login\ResetPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SessaoController extends Controller
{

    public function resetSenhaFRM(Request $req)
    {
        Auth::logout();
        $req->session()->regenerate();
    }
    public function verifyEmailReset(ResetEmailRequest $req)
    {
        Auth::logout();
        $req->session()->regenerate();
        dd($req->input());
    }

    public function resetSenhaPost(ResetPasswordRequest $req)
    {
        dd($req->all());
    }

    //adm login
    public function admLoginFMR()
    {
        return view('login.login-adm');
    }
    public function admPostLogin(LoginRequest $login)
    {
    }
    public function admLogoutPost()
    {
    }

    //porteiro
    public function porteiroLoginFMR()
    {
        return view('login.login-porteiro');
    }
    
    public function porteiroPostLogin(LoginRequest $login)
    {
    }
    public function porteiroLogoutPost()
    {
    }

    //sincdico login
    public function sindicoLoginFMR()
    {
        return view('login.login-sindico');
    }

    public function sindicoPostLogin(LoginRequest $login)
    {
    }
    public function sindicoLogoutPost()
    {
    }
}
