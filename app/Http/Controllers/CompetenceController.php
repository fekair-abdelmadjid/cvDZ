<?php

namespace App\Http\Controllers;

use App\Competence;
use App\Http\Requests\CompetenceRequest;
use Auth;

class CompetenceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('competence.create');
    }


    public function store(CompetenceRequest $request)
    {
        $competence = new Competence();
        $cv = Auth::user()->cvs;

        $competence->Domaine = $request->input('Domaine');
        $competence->titre = $request->input('Competence');
        $competence->maitrise = $request->input('maitrise');
        $competence->cv_id = $cv->id;

        $competence->save();

        session()->flash('success', 'Le competence bien enregistrer');
        return redirect('cvs');
    }


    public function edit($id)
    {

        $competence = Competence::find($id);
        if(isset($competence)){
        if(Auth::user()->cvs->id==$competence->cv->id){
        return view('competence.edit', ['competence' => $competence]);
        }else{
         return view('errors.403');
        }
        }else{
        return view('errors.403');
        }
    }


    public function update(CompetenceRequest $request, $id)
    {
        $competence = Competence::find($id);

        $competence->Domaine = $request->input('Domaine');
        $competence->titre = $request->input('Competence');
        $competence->maitrise = $request->input('maitrise');

        $competence->save();
        session()->flash('success', 'Le competence bien enregistrer');
        return redirect('cvs');
    }


    public function destroy($id)
    {
        $competence = Competence::find($id);
        $competence->delete();
        return redirect('cvs');
    }
}
