<?php

namespace App\Http\Controllers;

use App\Cv;
use App\Http\Requests\cvRequest;
use App\User;
use Auth;

class CvController extends Controller
{
    //
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    //lister cv
    public function index()
    {
        $listcv =Auth::user()->cvs;
        if (isset($listcv->titre)) {
          return view('cv.index', ['cvs' => $listcv]);
        }else{
        return view('cv.create');
        }
       

    }


    //affiche le formulaire de cv
    public function create()
    {
        return view('cv.create');
    }


    //Enregistrer un cv
    public function store(cvRequest $request)
    {
        $cv = new Cv();

        $cv->titre = $request->input('titre');
        $cv->prsentation = $request->input('Presentation');
        $cv->domaine = $request->input('domaine');
        $cv->user_id = Auth::user()->id;

        $cv->save();
        session()->flash('success', 'Le cv bien enregistrer');
        return redirect('cvs');
    }


    //permet de récupirer un cv puis le mettre dans le formulaire
    public function edit($id)
    {
        $cv = Cv::find($id);
        if ($cv->user->id==Auth::user()->id) {
           return view('cv.edit', ['cv' => $cv]);
        }else{
            return view('errors.403');
        }
       
    }


    //permet de modifer un cv
    public function update(cvRequest $request, $id)
    {
        $cv = Cv::find($id);

        $cv->titre = $request->input('titre');
        $cv->prsentation = $request->input('Presentation');
        $cv->domaine = $request->input('domaine');


        $cv->save();

        return redirect('cvs');
    }


    //permet de supprimer le cv
    public function destroy($id)
    {
        $cv = Cv::find($id);
        $cv->delete();
        return redirect('cvs');
    }
}
