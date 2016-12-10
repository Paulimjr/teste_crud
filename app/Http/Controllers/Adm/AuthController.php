<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller {

    //funcao para abrir a tela de login
    public function index() {
        if (\Auth::check()) {
            return redirect('/adm/home');
        }
        return view('index');
    }

    //funcao para logar no sistema
    public function logar(Request $request) {

        $user = \App\Usuario::where('email', $request->usuario)->select('id', 'email', 'nome', 'senha', 'permissao')->first();
        if (!$user) {
            return redirect('/login')->with('error', "Verfique seu email, parece não estar cadastrado!");
        }
        if ($user->senha != md5($request->senha)) {
            return redirect('/login')->with('error', "Senha parece estar incorreta!");
        }
        \Auth::login($user);
        return redirect('/adm/home');
    }
    //funcao para sair do sistema
    public function logout() {
        \Auth::logout();
        return redirect('/login');
    }
}
