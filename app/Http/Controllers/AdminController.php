<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        
        return Admin::all();
    }

    public function store(Request $request){

        $request->validate([
            'usuario'=>'required|max:50',
            'senha'=> 'required|max:20'
        ]);

        $adm = Admin::create([
            'usuario'=>$request->input('usuario'),
            'senha'=>$request->input('senha')
        ]);
        return $adm;

    }
}
