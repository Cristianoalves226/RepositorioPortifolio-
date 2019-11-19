<?php

namespace App\Http\Controllers\Site;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class LoginController extends Controller
{
public function index()
{
  return  view('home');
}

public function Login()
{
  # code...
}
    public function salvar(Request $request)
    {
        // Insere uma nova categoria, de acordo com os dados informados pelo usuário

       $dados = $request->all();
        


       

        User::create($dados);
        $msg = "dados nao inserido";


        return redirect()->route('site.index');

    }

   /*public function entrar(Request $req)
    {
      Auth::Login;
      return redirect()->route('home');

    }*/
  



    public function sair()
    {
      # code...
      Auth::logout();
      return redirect()->route('home');

    }

    public function contaNova()
    {
        return view('admin.contaNova');
    }

}
