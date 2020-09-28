<?php

namespace App\Http\Controllers;
use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadoresController extends Controller
{
    
    public function index(){
        
            return Jogador::all();
    }

    public function store(Request $request){

        $request->validate([
            'nomeJogador'=>'required|max:50',
        ]);

        $jogador = Jogador::create([
            'nomeJogador'=>$request->input('nomeJogador'),
            'idade'=>$request->input('idade'),
            'posicao'=>$request->input("posicao")
        ]);
        return $jogador;

    }

    public function delete(Request $request){
        $jogador = Jogador::destroy($request->input('idJogador'));
    }

    public function update(Request $request, Jogador $jogador){

        $request->validate([
            'nomeJogador'=>'required|max:50',
        ]);

        $jogador->nomeJogador = $request->input('nomeJogador');
        $jogador->save();
        return $jogador;
    }

}
