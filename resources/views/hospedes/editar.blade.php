@extends ('main')

@section ('title', 'iHotel - Editar cadastro')

@section('content')

<div class="cabecalho">
    <span>Hóspedes - Consultar cadastro</span>
</div>

<div class="col-lg-11" id="container-main">  
    <form action="/hospedes/atualizar/{{$hospede->id_hospede}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-sm-5">
                <label for="nome" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $hospede->nome }}">
            </div>

            <div class="col-sm-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $hospede->telefone }}">
            </div>

            <div class="col-sm-4">
                <label for="profissao" class="form-label">Profissão</label>
                <input type="text" class="form-control" id="profissao" name="profissao" placeholder="" value="{{ $hospede->profissao }}">
            </div>

            <div class="col-sm-3">
                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="" value="{{ $hospede->nacionalidade }}">
            </div>

            <div class="col-sm-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="" value="{{ $hospede->data_nascimento }}">
            </div>

            <div class="col-sm-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-select" name="genero" id="genero" value="{{ $hospede->genero }}">
                    <option value="">Selecione uma opção</option>
                    <option value="M" {{ $hospede->genero == 'M' ? 'selected' : "" }} >Masculino</option>
                    <option value="F" {{ $hospede->genero == 'F' ? 'selected' : "" }} >Feminino</option>
                </select>
            </div>

            <div class="col-sm-3">
                <label for="tipo_documento" class="form-label">Tipo Documento</label>
                <select class="form-select" name="tipo_documento" id="tipo_documento" value="{{ $hospede->tipo_documento }}">
                    <option value="">Selecione uma opção</option>
                    <option value="1" {{ $hospede->tipo_documento == '1' ? 'selected' : "" }} >RG</option>
                    <option value="2" {{ $hospede->tipo_documento == '2' ? 'selected' : "" }} >CNH</option>
                    <option value="3" {{ $hospede->tipo_documento == '3' ? 'selected' : "" }} >Passaporte</option>
                </select>
            </div>

            <div class="col-sm-4">
                <label for="numero_documento" class="form-label">Nº Documento</label>
                <input type="text" class="form-control" id="numero_documento" name="numero_documento" placeholder="" value="{{ $hospede->numero_documento }}">
            </div>

            
            <div class="col-sm-4">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $hospede->cpf }}">
            </div>

            <div class="col-sm-2">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" value="{{ $hospede->cidade }}">
            </div>

            <div class="col-sm-2">
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" placeholder="" value="{{ $hospede->uf }}">
            </div>

            <div class="col-sm-6">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" value="{{ $hospede->endereco }}">
            </div>

            <div class="col-sm-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="" value="{{ $hospede->email }}">
            </div>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Atualizar" id="button-action">
        
    </form>
</div>
@endsection