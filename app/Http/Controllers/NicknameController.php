<?php

namespace App\Http\Controllers;

use App\Usuarios;

use Illuminate\Http\Request;

class NicknameController extends Controller
{
    public function devuelveTodo($nickname)
    {
        return Usuarios::all($nickname);
    }
    public function devuelveSoloNickname()
    {
        $nicknames = Usuarios::select('id','nickname')->get();
        return view('paginainicio')->with('nicknames',$nicknames);
    }
    public function devuelveUsuario($id){
        $usuario=Usuarios::where('id',$id)->get();
        return view('perfil')->with('usuario',$usuario );
        
    }
}
