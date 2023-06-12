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
    }
    public function admPostLogin()
    {
    }
    public function admLogoutPost()
    {
    }

    //porteiro
    public function porteiroLoginFMR()
    {
    }
    public function porteiroPostLogin()
    {
    }
    public function porteiroLogoutPost()
    {
    }

    //sincdico login
    public function sindicoLoginFMR()
    {
    }
    public function sindicoPostLogin()
    {
    }
    public function sindicoLogoutPost()
    {
    }

}
