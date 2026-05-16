<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso; 

class CursoController extends Controller
{
    
    public function index() {
        $cursos = Curso::all();
        return view('admin.cursos.index', compact('cursos'));
    }

    

    public function adicionar() {
        return view('admin.cursos.adicionar');
    }

    public function editar(int $id) {
        
        $linha = Curso::find($id);
       
        return view('admin.cursos.editar',compact('linha'));
       
    }

    public function excluir(int $id) {
        
        Curso::find($id)->delete();
      
        return redirect()->route('admin.cursos'); 
    }

    public function atualizar(Request $request, int $id) {
       
        $dados = $request->all();

        
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

       
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        
        Curso::find($id)->update($dados);

       
        return redirect()->route('admin.cursos');
    }
}
