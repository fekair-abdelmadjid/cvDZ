<?php

namespace App\Http\Controllers;

use App\Cv;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Search;

class ParcourircvController extends Controller
{

    public function index()
    {
        $cv = Cv::paginate(12);
        return view('parcourircv.index', ['cv' => $cv]);
    }

    public function search(Request $request)
    {


//========================== 1er ===========================
        if (@isset($request->title) && @isset($request->Wilaya)) {
            $cv = Search::search(
                "Cv",
                ['titre', 'prsentation', 'domaine'],
                $request->title,
                null,
                ['id', 'asc'],
                true,
                100
            );

            foreach ($cv as $value) {
                if ($value->user->Wilaya == $request->Wilaya) {
                    $cv2[] = $value;
                }
            }

            if (@isset($cv2)) {
                return view('parcourircv.index', ['cv' => $cv2]);
            } else {
                session()->flash('success', 'Il ny a pas de résultat');
                return redirect('prcoruire');
            }

        } //========================== 2emme ===========================
        elseif (@empty($request->title) && @isset($request->Wilaya)) {
            $cv = Cv::all();
            foreach ($cv as $value) {
                if ($value->user->Wilaya == $request->Wilaya) {
                    $cv2[] = $value;
                }
            }


            if (@isset($cv2)) {
                return view('parcourircv.index', ['cv' => $cv2]);
            } else {
                session()->flash('success', 'Il ny a pas de résultat');
                return redirect('prcoruire');
            }

        } //========================== 3emme ===========================
        elseif (@isset($request->title) && @empty($request->Wilaya)) {
            $cv2 = Search::search(
                "Cv",
                ['titre', 'prsentation', 'domaine'],
                $request->title,
                null,
                ['id', 'asc'],
                true,
                100
            );

            if (@isset($cv2)) {
                return view('parcourircv.index', ['cv' => $cv2]);
            } else {
                session()->flash('success', 'Il ny a pas de résultat');
                return redirect('prcoruire');
            }
        } //========================== 4emme ===========================
        elseif (@empty($request->title) && @empty($request->Wilaya)) {
            $cv2 = Cv::all();
            return view('parcourircv.index', ['cv' => $cv2]);
        }

    }

}


