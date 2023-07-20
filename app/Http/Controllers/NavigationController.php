<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function financiamentopf()
    {
        return view('controlPessoal.financiamento-pf');
    }
    public function controlepf()
    {
        return view('controlPessoal.controle-pf');
    }
}
