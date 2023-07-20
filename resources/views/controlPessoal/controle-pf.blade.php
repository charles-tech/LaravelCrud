@extends('adminlte::page')
@extends('controlPessoal.modal')

@section('title', 'Controle PF')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <h1>Controle financeiro pessoa fisica</h1>
        <form class="form-horizontal" action="/controle-pf" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="local" name="local" placeholder="Padaria Pão Doce">
                    </div>
                </div>

                <div class="row mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Valor (R$:)</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="valor" name="valor" placeholder="10,55">
                    </div>
                </div>


                <div class="row mt-3">
                    <label class="col-sm-2" for="title">Categoria</label>
                    <div class="col-sm-10">
                        <select name="tipo" id="private" class="form-control">
                            <option value="Mercado">Alimentação</option>
                            <option value="Educação">Educação</option>
                            <option value="Lazer">lazer</option>
                            <option value="Farmacia">Farmacia</option>
                            <option value="Transportes">Transportes</option>
                            <option value="Itens Pessoais">Itens Pessoais</option>
                            <option value="Extras">Extras</option>
                        </select>
                    </div>
                </div>

            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-info" value="criar evento">Salvar</button>
                <button type="submit" class="btn btn-default float-right">Cancelar</button>

            </div>


        </form>

        <div class="form-row mt-4">

            <div class="col-md-6">
                <p class="text-center">
                    <strong>Caterias</strong>
                </p>

                <div class="progress-group">

                    @foreach($categorias as $categoria)
                        <p>{{$categoria ->orcamento}}</p>
                    @endforeach
                    <span class="progress-text">Educação</span>
                    <span class="float-right"><b>160</b>/800</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                </div>

                <div class="progress-group">
                    <span class="progress-text">Mercado</span>
                    <span class="float-right"><b>310</b>/2000</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                </div>

                <div class="progress-group">

                    <span class="progress-text">Lazer</span>
                    <span class="float-right"><b>480</b>/1000</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>

                <div class="progress-group">

                    <span class="progress-text">Farmacia</span>
                    <span class="float-right"><b>480</b>/1000</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>

                <div class="progress-group">

                    <span class="progress-text">Transporte</span>
                    <span class="float-right"><b>480</b>/1000</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>

                <div class="progress-group">

                    <span class="progress-text">Itens Pessoais</span>
                    <span class="float-right"><b>480</b>/1000</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>

                <div class="progress-group">

                    <span class="progress-text">Extras</span>
                    <span class="float-right"><b>480</b>/1000</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>

            </div>


            <div class="col-md-6">
                <form action="/controle-pf" method="get">
                    @csrf
                    <div>
                        <label class="col-sm-2" for="title">Inicio</label>
                        <input class="" type="date" name="entrada">
                    </div>

                    <div>
                        <label class="col-sm-2" for="title">Final</label>
                        <input class="" type="date" name="saida">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info" value="pesquisar">Pesquisar</button>
                    </div>

                </form>
            </div>


            <div class="col-md-6">
                <p>

                    Total Recusos:
                    @php

                        $somaRecurso=0;
                                        foreach($recursos as $recurso)
                                            {
                                                   $somaRecurso += $recurso->valor;
                                            }
                                echo number_format($somaRecurso,2,',','.') ;
                    @endphp


                </p>


                <p>
                    Total Gasto :R$
                    @php
                        $somaGastos=0;
                            foreach($fluxos as $fluxo)
                                {
                                       $somaGastos += $fluxo->valor;
                                }
                    echo number_format($somaGastos,2,',','.') ;
                            $saldo = $somaRecurso - $somaGastos;
                    @endphp
                </p>

                <p>
                    Saldo:
                    {{number_format($saldo,2,',','.')}}

                </p>


            </div>


        </div>


        <table class="table table-hover mt-5">
            <thead>
            <th>#</th>
            <th>Local</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th>Data</th>
            </thead>
            <tbody>
            @foreach($fluxos as $fluxo)

                <tr>
                    <td>{{$fluxo->id}}</td>
                    <td>{{$fluxo->local}}</td>
                    <td>{{$fluxo->valor}}</td>
                    <td>{{$fluxo->tipo}}</td>
                    <td>{{( new DateTime($fluxo->created_at))->format('d/m/Y- H:i')}}</td>
                </tr>

            @endforeach
            </tbody>

        </table>

        <div class="row">
            {{$fluxos->links('custom.pagination')}}
        </div>


    </div>

@stop
