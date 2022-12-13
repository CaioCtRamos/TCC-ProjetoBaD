<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dossie;

class DossieController extends Controller
{
    public function index(){

        $dossies = Dossie::all();

        return view('main',['dossies' => $dossies]);
    }
    public function create(){
        return view('Dossie.create');
    }
    
    public function store(Request $request){
        $dossie = new Dossie;

        $dossie->nome = $request->nome;
        $dossie->curso = $request->curso;
        $dossie->turma = $request->turma;
        $dossie->estante = $request->estante;
        $dossie->lado = $request->lado;

        $dossie->save();

        return redirect('/')->with('msg','Dossie criado com sucesso.');
    }

    public function show($id){
        
        $dossie = Dossie::findOrFail($id);

        return view('Dossie.show', ['dossie' => $dossie]);
    }
}
