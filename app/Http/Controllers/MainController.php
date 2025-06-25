<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function nova_pagina(): View
    {
        return view('nova_pagina');
    }

    public function testes(Request $request)
    {
        //dados do usuario autenticado
        $id = auth()->user()->id;
        //ou
        $id = $request->user()->id;
        echo $id."<br>";

        $username = auth()->user()->email;
        //ou
        $username = $request->user()->email;
        echo $username."<br>";

    }

    public function nova_pagina_publica():View
    {
        return view('nova_pagina_publica');
    }

    public function main_logout()
    {
        //Logout sem post limpar o usuario da sessao
        Auth::logout();

        //invalidadar a sessao e regenerar o token
        session()->invalidate();

        //regeneração do crsf token
        session()->regenerateToken();

        //redireciona
        return redirect('/');


    }
}
