<?php

namespace App\Http\Controllers;

use App\Langue;
use App\Http\Requests\LangueRequest;
use Auth;

class LangueController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('langue.create');
    }


    public function store(LangueRequest $request)
    {
        $langue = new Langue();
        $cv = Auth::user()->cvs;

        $langue->langue = $request->input('Langue');
        $langue->maitrise = $request->input('Maitrise');
        $langue->cv_id = $cv->id;

        $langue->save();

        session()->flash('success', 'Le Langue bien enregistrer');
        return redirect('cvs');
    }


    public function edit($id)
    {
        $langue = Langue::find($id);
        if(isset($langue)){
        if(Auth::user()->cvs->id==$langue->cv->id){
        return view('langue.edit', ['langue' => $langue]);
        }else{
         return view('errors.403');
        }
        }else{
        return view('errors.403');
        }
    }


    public function update(LangueRequest $request, $id)
    {
        $langue = Langue::find($id);

        $langue->langue = $request->input('Langue');
        $langue->maitrise = $request->input('Maitrise');

        $langue->save();

        return redirect('cvs');
    }


    public function destroy($id)
    {
        $langue = Langue::find($id);
        $langue->delete();
        return redirect('cvs');
    }
}
