@extends('adminlte::page')

@section('title', 'Pacientes | OM30')

@section('content_header')
    <h1 class="m-0 text-dark">Painel Administrativo</h1>
@stop

@section('content')
    <div class="row" style="margin-bottom: 2.5em;">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Filtrar</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="mb-0">
                                    <h5>Olá <b>{{ Auth::user()->name }}</b>, seja bem-vindo!</h5>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
