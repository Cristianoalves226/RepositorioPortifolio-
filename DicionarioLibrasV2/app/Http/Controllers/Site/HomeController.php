<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libras;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index()
    {
        # code...
        $registros = Libras::paginate(2);

        return view('home',compact('registros'));
    }


    public function busca(Request $req)
    {


        $titulo = Libras::where('titulo', '=', $req->titulo)->first();
        return view('admin.buscar', compact('titulo'));


    }


    public function adicionar()
    {
        return view('admin.adicionar');
    }
    public function salvar(Request $req)
    {


        $dados = $req->all();
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }
        if ($req->hasfile('video')) {
            # code...
            $imagem = $req->file('video');
            $num = rand(1111, 9999);
            $dir = "video/dicionario";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "video_" . $num . "." . $ex;
            $imagem->move($dir, $nomeImagem);
            $dados['video'] = $dir . "/" . $nomeImagem;

            Libras::create($dados);


        }
        return redirect()->route('site.index');
    }
    public function editar($id)
    {
      $registro = Libras::find($id);

      return view('admin.editar',compact('registro'));


    }
    public function atualizar(Request $req,$id)
    {


        $dados = $req->all();
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }
        if ($req->hasfile('video')) {
            # code...
            $imagem = $req->file('video');
            $num = rand(1111, 9999);
            $dir = "video/dicionario";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "video_" . $num . "." . $ex;
            $imagem->move($dir, $nomeImagem);
            $dados['video'] = $dir . "/" . $nomeImagem;



        }
        Libras::find($id)->update($dados);



        echo "chegou aqui ?";
        return redirect()->route('tabela');
    }
    public function deletar($id)
    {
      Libras::find($id)->delete();
      return redirect()->route('tabela');
    }

    public function listasinais()
    {
        $dados = Libras::all();
        return view('admin.tabela', compact('dados'));


    }
     
    public function entrar(Request $req)
    {
      # code...
      $dados =$req->except('_token');

      if (Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])) {
               # code...
               return redirect()->route('tabela');
            }else{
                return redirect()->route('site.index');
            }
      
            
      

      
    }


        
    
    public function sair()
    {
      # code...
      Auth::logout();
      return redirect()->route('site.index');

    }


    public function login()
    {
        return view('admin.login');
    }

    public function contaNova()
    {
        return view('admin.contaNova');
    }
}
