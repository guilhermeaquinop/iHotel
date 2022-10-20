@extends ('main')

@section ('title', 'iHotel - Cadastro de Hóspedes')

@section('content')

<div class="cabecalho">
    <span>Hóspedes - Novo cadastro</span>
</div>

<div class="col-lg-11" id="container-main">   
    <form action="{{ route('hospedes.cadastrar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row g-3">
            <div class="col-sm-5">
                <label for="nome" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="col-sm-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>

            <div class="col-sm-4">
                <label for="profissao" class="form-label">Profissão</label>
                <input type="text" class="form-control" id="profissao" name="profissao" placeholder="" value="">
            </div>

            <div class="col-sm-3">
                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="" value="">
            </div>

            <div class="col-sm-3">
                <label for="dt_nasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dt_nasc" name="data_nascimento" placeholder="" value="">
            </div>

            <div class="col-sm-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-select" name="genero" id="genero">
                    <option value="">Selecione uma opção</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <div class="col-sm-3">
                <label for="tp_doc" class="form-label">Tipo Documento</label>
                <select class="form-select" name="tipo_documento" id="tipo_documento">
                    <option value="">Selecione uma opção</option>
                    <option value="1">RG</option>
                    <option value="2">CNH</option>
                    <option value="3">Passaporte</option>
                </select>
            </div>

            <div class="col-sm-4">
                <label for="num_doc" class="form-label">Nº Documento</label>
                <input type="text" class="form-control" id="numero_documento" name="numero_documento" placeholder="" value="">
            </div>

            
            <div class="col-sm-4">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>

            <div class="col-sm-2">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" value="">
            </div>

            <div class="col-sm-2">
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" placeholder="" value="">
            </div>

            <div class="col-sm-6">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" value="">
            </div>

            <div class="col-sm-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="" value="">
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Cadastrar" id="button-action">

    </form>
</div>

@if(session('cadastroRealizado'))
    @include('hospedes.components.alerta-sucesso')
@endif

@endsection