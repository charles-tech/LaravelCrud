@extends('adminlte::page')
@section('title', 'Financiamento')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <h1>Cálculo de Financiamento</h1>
        <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="local" placeholder="Pararia">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Valor</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="valor" placeholder="10.55">
                    </div>
                </div>


            </div>

            <div class="col-sm-6">

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1">
                        <label class="form-check-label">Educação</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio2">
                        <label class="form-check-label">Mercado</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio3">
                        <label class="form-check-label">Lazer</label>
                    </div>
                </div>
            </div>



            <div class="card-footer">
                <button type="submit" class="btn btn-info">Salvar</button>
                <button type="submit" class="btn btn-default float-right">Cancelar</button>

            </div>


        </form>

        <div class="col-md-4">
            <p class="text-center">
                <strong>Caterias</strong>
            </p>
            <div class="progress-group">
                <span class="progress-text">Educação</span>
                <span class="float-right"><b>160</b>/200</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                </div>
            </div>

            <div class="progress-group">
                <span class="progress-text">Mercado</span>
                <span class="float-right"><b>310</b>/400</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                </div>
            </div>

            <div class="progress-group">
                <span class="progress-text">Lazer</span>
                <span class="float-right"><b>480</b>/800</span>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                </div>
            </div>



        </div>
    </div>


@stop
