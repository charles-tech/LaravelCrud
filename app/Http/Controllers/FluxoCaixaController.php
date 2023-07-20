<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\FluxoCaixa;
use App\Models\Recursos;



class FluxoCaixaController extends Controller
{
//    public function index()
//    {
//        $fluxos = (new FluxoCaixa())->getall();
//        return view('controlPessoal.controle-pf',['fluxos'=>$fluxos]);
//    }

    public function where(Request $request)
    {
        $entrada = $request->input('entrada');
        $saida = $request->input('saida');
        $fluxos = (new FluxoCaixa())->pesquisawhere($entrada, $saida);
        $recursos = (new Recursos())->pesquisawhere($entrada, $saida);
        $whereCategoria=(new Categoria())->whereCategoria();

        return view('controlPessoal.controle-pf', ['fluxos' => $fluxos, 'recursos' => $recursos,'categorias'=>$whereCategoria]);

    }


//    public function whereCategoria(Request $request)
//    {
//
//        $categorias = $request->input('categoria');
//        $categorias = (new Categoria())->whereCategoria($categorias);
//
//
//        return view('controlPessoal.controle-pf', ['categorias' => $categorias]);
//
//    }

    public function store(Request $request)
    {
        $fluxos = new FluxoCaixa;
        $fluxos->local = $request->local;
        $fluxos->valor = $request->valor;
        $fluxos->tipo = $request->tipo;

        $fluxos->save();
        return redirect('/controle-pf');
    }






}
