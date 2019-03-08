<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Auth;

class ViewcvController extends Controller
{

    public function index($id)
    {
        $cv = Cv::find($id);
        return view('viewcv.index', ['cv' => $cv]);

    }

}
