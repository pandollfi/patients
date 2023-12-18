@extends('adminlte::page')

@section('title', 'Pacientes | OM30')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pacientes</h1>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card-header">
                    @if (isset($patient->id))
                        <h3 class="card-title">Editar Paciente</small></h3>
                    @else
                        <h3 class="card-title">Cadastrar Paciente</small></h3>
                    @endif
                </div>

                @if (isset($patient->id))
                    <form id="quickForm" method="post" action="{{ URL::to('patient/' . $patient->id) }}">
                        @csrf
                        @method('PUT')
                    @else
                        <form id="quickForm" method="post" action="{{ route('patient.store') }}">
                            @csrf
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputNome">Nome Completo</label>
                                <input type="text" class="form-control" id="inputName" maxlength="200" name="name"
                                    placeholder="Informe o Nome Completo" value="{{ $patient->name ?? old('name') }}"
                                    required>
                                <span class="error_form">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputNome">Nome da Mãe</label>
                                <input type="text" class="form-control" id="inputMothersName" maxlength="200"
                                    name="mothers_name" placeholder="Informe o Nome da Mãe"
                                    value="{{ $patient->mothers_name ?? old('mothers_name') }}" required>
                                <span
                                    class="error_form">{{ $errors->has('mothers_name') ? $errors->first('mothers_name') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputCpf">CPF</label>
                                <input type="text" class="form-control cpf" id="inputCpf" name="cpf"
                                    placeholder="Informe o CPF" value="{{ $patient->cpf ?? old('cpf') }}" required>
                                <span class="error_form">{{ $errors->has('cpf') ? $errors->first('cpf') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputDataNascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="inputBirthDate"
                                    placeholder="Informe o Data de Nascimento" name="birth_date" required
                                    value="{{ $patient->birth_date ?? old('birth_date') }}">
                                <span
                                    class="error_form">{{ $errors->has('birth_date') ? $errors->first('birth_date') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputCpf">CNS</label>
                                <input type="text" class="form-control cns" id="inputCNS" name="cns"
                                    placeholder="Informe o CNS" value="{{ $patient->cns ?? old('cns') }}" required
                                    maxlength="18">
                                <span class="error_form">{{ $errors->has('cns') ? $errors->first('cns') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputEndereco">Rua</label>
                                <input type="text" class="form-control" id="inputStreet" maxlength="200"
                                    placeholder="Digite o nome da Rua" name="street"
                                    value="{{ $patient->address->street ?? old('street') }}" required>
                                <span
                                    class="error_form">{{ $errors->has('street') ? $errors->first('street') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="inputNumero">Número</label>
                                <input type="text" class="form-control number" id="inputNumero" placeholder="No."
                                    name="number" maxlength="5" value="{{ $patient->address->number ?? old('number') }}"
                                    required>
                                <span
                                    class="error_form">{{ $errors->has('number') ? $errors->first('number') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="inputBairro">Bairro</label>
                                <input type="text" class="form-control" id="inputDistrict"
                                    placeholder="Digite o Bairro" maxlength="50" name="district"
                                    value="{{ $patient->address->district ?? old('district') }}" required>
                                <span
                                    class="error_form">{{ $errors->has('district') ? $errors->first('district') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="inputBairro">Complemento</label>
                                <input type="text" class="form-control" id="inputComplement"
                                    placeholder="Digite o Complemento" maxlength="150" name="complement"
                                    value="{{ $patient->address->complement ?? old('complement') }}">
                                <span
                                    class="error_form">{{ $errors->has('complement') ? $errors->first('complement') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="inputCep">CEP</label>
                                <input type="text" class="form-control zip_code" id="zip_code"
                                    placeholder="Digite o CEP" name="zip_code"
                                    value="{{ $patient->address->zip_code ?? old('zip_code') }}" required>
                                <span
                                    class="error_form">{{ $errors->has('zip_code') ? $errors->first('zip_code') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" class="form-control" placeholder="Digite a Cidade" name="city"
                                    id="city" maxlength="50" value="{{ $patient->address->city ?? old('city') }}"
                                    required readonly>
                                <span class="error_form">{{ $errors->has('city') ? $errors->first('city') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="inputCidade">UF</label>
                                <input type="text" class="form-control" placeholder="Digite o Estado" name="state"
                                    id="state" maxlength="2" value="{{ $patient->address->state ?? old('state') }}"
                                    required readonly>
                                <span class="error_form">{{ $errors->has('state') ? $errors->first('state') : '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('patient.index') }}"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Voltar</button></a>
            </div>
            </form>
        </div>
    </div>

@stop

@section('footer')
    <div class="float-right d-none d-sm-block"><b>Versão</b> 1.0.0</div>
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
        $('.zip_code').mask('00000-000');
        $('.date').mask('00/00/0000');
        $('.number').mask('00000');
    </script>

    <script>
        $(document).ready(function() {
            $('#zip_code').on('keydown', function(e) {
                var zip_code = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos
                if (zip_code.length === 8 && (e.keyCode === 9 || e.keyCode === 13)) {
                    consultarCEP(zip_code);
                }
            });

            function consultarCEP(zip_code) {
                $.ajax({
                    url: 'https://viacep.com.br/ws/' + zip_code + '/json/',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (!data.erro) {
                            $('#city').val(data.localidade);
                            $('#state').val(data.uf);
                        } else {
                            $('#city').val('Localização não encontrada');
                        }
                    },
                });
            }
        });
    </script>
@stop
