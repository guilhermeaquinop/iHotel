@extends ('main')

@section ('title', 'iHotel - Consulta de Hóspedes')

@section('content')

<div class="cabecalho">
    <span>Hóspedes - Consultar cadastro</span>
</div>

<div class="col-lg-11" id="container-main">

    <form action="" method="POST">
        <div class="row g-3 d-flex align-items-end">
            <div class="col-sm-3">
                <label for="tp_doc" class="form-label">Pesquisar por:</label>
                <select class="form-select" name="tp_pesq" id="tp_pesq">
                    <option value="">Selecione uma opção</option>
                    <option value="1">Nome</option>
                    <option value="2">CPF</option>
                </select>
            </div>

            <div class="col-sm-5">
                <label for="nome" class="form-label">Pesquisar cadastro</label>
                <input type="text" class="form-control" id="consultar" name="consultar">
            </div>

            <div class="col-sm-3">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </div>
    </form>

    @if($hospedes)
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Ultimo Check-In</th>
                <!-- <th scope="col">Data de Cadastro</th> -->
            </tr>
        </thead>

        <tbody >
            @foreach($hospedes as $hospede)
            <tr>
                <td>{{ $hospede->id_hospede }}</td>
                <td>{{ $hospede->nome }}</td>
                <td>{{ $hospede->cpf }}</td>
                <td>01/01/2022</td>
                <td><a href="{{ route('hospedes.editar', $hospede->id_hospede) }}" class="btn btn-primary delete-btn" title="Editar"><i class="bi bi-pencil-square"></i></a></td>
                <form action="{{ route('hospedes.deletar', $hospede->id_hospede)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger delete-btn" title="Deletar"><i class="bi bi-trash-fill"></button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>

@if (session('exclusaoRealizada'))

    @include('hospedes.components.alerta-exlcusao')
    
@elseif (session('edicaoRealizada'))

    @include('hospedes.components.alerta-edicao')

@endif

@endsection