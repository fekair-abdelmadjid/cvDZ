<?php

namespace App\Http\Controllers;

use App\Projet;
use App\Http\Requests\ProjetsRequest;
use Auth;

class ProjetController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('projet.create');
    }


    public function store(ProjetsRequest $request)
    {
        $projet = new Projet();
        $cv = Auth::user()->cvs;

        $projet->titre = $request->input('Projet');
        $projet->presentation = $request->input('presentation');
        $projet->cv_id = $cv->id;

        $projet->save();

        session()->flash('success', 'Le projet bien enregistrer');
        return redirect('cvs');
    }


    public function edit($id)
    {
        $projet = Projet::find($id);
        if(isset($projet)){
        if(Auth::user()->cvs->id==$projet->cv->id){
        return view('projet.edit', ['projet' => $projet]);
        }else{
         return view('errors.403');
        }
        }else{
        return view('errors.403');
        }
    }


    public function update(ProjetsRequest $request, $id)
    {
        $projet = Projet::find($id);

        $projet->titre = $request->input('Projet');
        $projet->presentation = $request->input('presentation');

        $projet->save();

        return redirect('cvs');
    }


    public function destroy($id)
    {
        $projet = Projet::find($id);
        $projet->delete();
        return redirect('cvs');
    }
}
