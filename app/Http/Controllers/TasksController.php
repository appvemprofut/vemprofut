<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = [
            [
                "idJogador"=>1,
                "nomeJogador"=>"Ronaldo",
                "idade"=>35,
                "posicao"=>"ATA"
            ],
            [
                "idJogador"=>2,
                "nomeJogador"=>"Messi",
                "idade"=>32,
                "posicao"=>"ATA"
            ]
            ];

            return $tasks;
    }

    public function store(Request $request){
        return $request->input('nomeJogador');
    }
}
