<?php

namespace App\Http\Controllers;

use App\Diplome;
use App\Http\Requests\DiplomeRequest;
use Auth;

class DiplomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('diplome.create');
    }


    public function store(DiplomeRequest $request)
    {
        $diplome = new Diplome();
        $cv = Auth::user()->cvs;

        $diplome->titre = $request->input('Diplome');
        $diplome->Etablissement = $request->input('Etablissement');
        $diplome->Date = $request->input('Date');
        $diplome->cv_id = $cv->id;

        $diplome->save();

        session()->flash('success', 'Le diplome bien enregistrer');
        return redirect('cvs');
    }


    public function edit($id)
    {
        $diplome = Diplome::find($id);
        if(isset($diplome)){
        if(Auth::user()->cvs->id==$diplome->cv->id){
        return view('diplome.edit', ['diplome' => $diplome]);
        }else{
         return view('errors.403');
        }
        }else{
        return view('errors.403');
        }
    }


    public function update(DiplomeRequest $request, $id)
    {
        $diplome = Diplome::find($id);

        $diplome->titre = $request->input('Diplome');
        $diplome->Etablissement = $request->input('Etablissement');
        $diplome->Date = $request->input('Date');

        $diplome->save();

        return redirect('cvs');
    }


    public function destroy($id)
    {
        $diplome = Diplome::find($id);
        $diplome->delete();
        return redirect('cvs');
    }
}
