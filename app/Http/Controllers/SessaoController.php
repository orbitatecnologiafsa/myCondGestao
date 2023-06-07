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
    public function loginFMR()
    {
        return view('login.login');
    }

    public function postLogin(LoginRequest $login)
    {
        dd($login->all());
    }

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
}
