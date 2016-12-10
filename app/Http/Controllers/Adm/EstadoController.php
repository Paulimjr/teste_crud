<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadoController extends Controller {

    //pagina inicia com a lista de estados cadastrados
    public function home() {
        $estados = \App\Estados::all();
        return view('home', compact('estados'));
    }

    //funcao para abrir a tela de insercao de um novo estado
    public function novo() {
        return view('novo_estado');
    }

    //funcao para deletar um estado pelo ID
    public function deletar($id) {
        $estado = \App\Estados::find($id);
        //caso informe um id que nao exista na base retorna para home
        if (is_null($estado)) {
            return redirect('/adm/home')->with('success', "OPS... Estado não encontrado!");
        }
        $estado->delete();
        return redirect('/adm/home')->with('success', "Excluído com sucesso!");
    }

    //funcao para alterar um estado pelo ID
    public function alterar($id) {
        $estado = \App\Estados::find($id);
        //caso informe um id que nao exista na base retorna para home
        if (is_null($estado)) {
            return redirect('/adm/home')->with('success', "OPS... Estado não encontrado!");
        }
        return view('alterar', compact('estado'));
    }

    //funcao para salvar alteracao do estado selecionado
    public function salvar_alteracao(Request $req) {
        $estado = \App\Estados::find($req->id);
        $estado->nome = $req->nome;
        $estado->sigla = $req->sigla;
        $estado->historico = $req->historico;
        $estado->save();
        return redirect('/adm/home')->with('success', "Alterado com sucesso!");
    }

    //funcao para salvar um estado (INSERIR)
    public function salvar(Request $request) {
        $estado = new \App\Estados();
        $estado->nome = $request->nome;
        $estado->sigla = $request->sigla;
        $estado->historico = $request->historico;
        $estado->save();
        return redirect('/adm/home')->with('success', "Salvo com sucesso!");
    }

}
