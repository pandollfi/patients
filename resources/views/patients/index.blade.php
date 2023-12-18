@extends('adminlte::page')

@section('title', 'Pacientes | OM30')

@section('content_header')
    <h1 class="float-left">Cadastro de Pacientes</h1>
    <div class="row">
        <div class="col-md-11">
        </div>

        <div class="col-md-1">
            <a href="{{ route('patient.create') }}"> <button type="button" class="btn btn-primary">Cadastrar</button>
            </a>
        </div>
    </div>
    @if (session('success'))
        <br>
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <br>
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

@stop

@section('content')

    @include('patients.filter')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Pacientes</small></h3>
        </div>


        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed text-nowrap">

                <thead>
                    <tr>
                        <th class="col-sm-1">ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>CMS</th>
                        <th class="col-sm-1">Editar</th>
                        <th class="col-sm-1">Ações</th>
                    </tr>
                </thead>
                @if (count($patients) >= 1)
                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td class="col-sm-1"><b>{{ $patient->id }}</b></td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ app('App\Helpers\Utils')->formatCPF($patient->cpf) }}</td>
                                <td>{{ app('App\Helpers\Utils')->formatCNS($patient->cns) }}</td>
                                <td class="col-sm-1">
                                    <a href="{{ URL::to('patient/' . $patient->id . '/edit') }}">
                                        <button type="button" class="btn btn-outline-primary" style="margin-top: -0.5em;">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                    </a>
                                </td>
                                <td class="col-sm-1">
                                    @if (!empty($patient->deleted_at))
                                        <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                            data-target="#exampleModal_{{ $patient->id }}" style="margin-top: -0.5em;"
                                            title="Restaurar Paciente">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                            data-target="#exampleModal_{{ $patient->id }}" style="margin-top: -0.5em;"
                                            title="Excluir Paciente">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endif

                                    <div class="modal fade" id="exampleModal_{{ $patient->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b>Atenção</b>
                                                    </h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Você tem certeza que quer
                                                    {{ !empty($patient->deleted_at) ? 'restaurar' : 'excluir' }} o
                                                    paciente
                                                    <b>{{ $patient->name }}</b> ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Voltar</button>
                                                    @if (!empty($patient->deleted_at))
                                                        <form id="form_{{ $patient->id }}" method="post"
                                                            action="{{ route('patient.restore') }}">
                                                            @csrf
                                                            <input type="hidden" name="patient" id="patient"
                                                                value="{{ $patient->id }}">
                                                            <button type="submit"
                                                                class="btn btn-primary">Restaurar</button>
                                                        </form>
                                                    @else
                                                        <form id="form_{{ $patient->id }}" method="post"
                                                            action="{{ route('patient.destroy', ['patient' => $patient->id]) }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="#"
                                                                onclick="document.getElementById('form_{{ $patient->id }}').submit()">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Excluir</button>
                                                            </a>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        @else
            <table class="table table-head-fixed text-nowrap">
                <tbody>
                    <tr class="text-center">
                        <td class="text-center"><b>Nenhum paciente encontrado.</b></td>
                    </tr>
                </tbody>
            </table>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                {{ $patients->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Versão</b> 1.0.0
    </div>
    <strong>Copyright © 2023 <a href="mailto:jcspj11@gmail.com" target="_blank">Jean Pandolfi Jr.</a></strong>
    | Todos os direitos reservados.
@stop

@section('css')
    <link rel="stylesheet" src="{{ asset('assets/css/main.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>


    <script>
        $('.cpf').mask('000.000.000-00');
        $('.cns').mask('000 0000 0000 0000');
    </script>
@stop
