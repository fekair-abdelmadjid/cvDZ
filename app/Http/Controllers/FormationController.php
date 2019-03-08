<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Http\Requests\FormationRequest;
use Auth;

class FormationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('formation.create');
    }


    public function store(FormationRequest $request)
    {
        $formation = new Formation();
        $cv = Auth::user()->cvs;

        $formation->titre = $request->input('Formation');
        $formation->Etablissement = $request->input('Etablissement');
        $formation->Description = $request->input('Description');
        $formation->Date = $request->input('Date');
        $formation->cv_id = $cv->id;

        $formation->save();
        session()->flash('success', 'Le formation bien enregistrer');
        return redirect('cvs');
    }


    public function edit($id)
    {
        $formation = Formation::find($id);
         if(isset($formation)){
        if(Auth::user()->cvs->id==$formation->cv->id){
        return view('formation.edit', ['formation' => $formation]);
        }else{
         return view('errors.403');
        }
        }else{
        return view('errors.403');
        }
    }


    public function update(FormationRequest $request, $id)
    {
        $formation = Formation::find($id);
        $formation->titre = $request->input('Formation');
        $formation->Etablissement = $request->input('Etablissement');
        $formation->Description = $request->input('Description');
        $formation->Date = $request->input('Date');
        $formation->save();

        return redirect('cvs');
    }


    public function destroy($id)
    {
        $formation = Formation::find($id);
        $formation->delete();
        return redirect('cvs');
    }
}
