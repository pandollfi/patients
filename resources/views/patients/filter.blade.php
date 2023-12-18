<form id="quickForm" method="get" action="{{ route('patient.index') }}">
    <div class="row" style="margin-bottom: 2.5em;">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Filtrar</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" maxlength="200" name="name"
                                    placeholder="Pesquise pelo Nome" value="{{ $patient->name ?? old('name') }}">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control cpf" id="inputCpf"
                                    placeholder="Pesquise pelo CPF" name="cpf"
                                    value="{{ $patient->cpf ?? old('cpf') }}">
                                <span class="error_form">{{ $errors->first('cpf') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control cns" id="inputCNS"
                                    placeholder="Pesquise pelo CNS" name="cns"
                                    value="{{ $patient->cns ?? old('cns') }}">
                                <span class="error_form">{{ $errors->first('cns') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <select class="custom-select" id="selectStatus" name="status">
                                <option value="" selected>Status</option>
                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Ativos</option>
                                <option value="2" {{ request('status') == '2' ? 'selected' : '' }}>Inativos
                                </option>
                                <option value="3" {{ request('status') == '3' ? 'selected' : '' }}>Todos</option>
                            </select>
                        </div>
                        <div class="col-sm-4" style="text-align: left;">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                            <a href="{{ route(Request::segment(1) . '.index') }}">
                                <button type="button" class="btn btn-warning">Limpar Filtros</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
