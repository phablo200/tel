<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

	protected $usr;
    public function __construct()
    {
    	$this->usr= new Usuario();
    }

    public function index()
    {
    	return view('usuario.index');
    }

    public function criar()
    {
    	return view('usuario.criar');
    }

    public function salvar(Request $req)
    {
    	$this->usr->create([
    		"nome"=>$req->nome,
    		"email"=>$req->email,
    		"senha"=>$req->senha
    	]);
    	return redirect()->route('usuario.index');
    }

}
