<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospedes;

class HospedesController extends Controller
{
    public function create(){
        return view('hospedes.cadastrar');
    }
    
    public function store(Request $request)
    {
        $hospede = new Hospedes();
        $hospede->nome = $request->nome;
        $hospede->telefone = $request->telefone;
        $hospede->profissao = $request->profissao;
        $hospede->nacionalidade = $request->nacionalidade;
        $hospede->data_nascimento = $request->data_nascimento;
        $hospede->genero = $request->genero;
        $hospede->tipo_documento = $request->tipo_documento;
        $hospede->numero_documento = $request->numero_documento;
        $hospede->cpf = $request->cpf;
        $hospede->cidade = $request->cidade;
        $hospede->uf = $request->uf;
        $hospede->endereco = $request->endereco;
        $hospede->email = $request->email;
        $hospede->save();
        return redirect('hospedes/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
    }

    public function show()
    {
        $hospedes = Hospedes::all();
        return view('hospedes.consultar', compact('hospedes'));
    }

    public function edit($id_hospede) {
        $hospede = Hospedes::findOrFail($id_hospede);
        return view('hospedes.editar', compact('hospede'));
    }

    public function update(Request $request) 
    {
        $hospede = $request->all();
        Hospedes::findOrFail($request->id_hospede)->update($hospede);
        return redirect('hospedes/consultar');//->with('edicaoRealizada', 'Cadastro atualizado com sucesso!');
    }

    public function destroy($id_hospede)
    {
        Hospedes::findOrFail($id_hospede)->delete();
        return redirect('hospedes/consultar');//->with('exclusaoRealizada', 'Cadastro excluído com sucesso!');
    }
}
