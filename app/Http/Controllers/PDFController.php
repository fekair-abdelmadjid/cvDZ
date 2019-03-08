<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Auth;
use PDF;

class PDFController extends Controller
{

    public function pdf()
    {

        $cv = Cv::find(Auth::user()->id);
        return view('CVPDF', ['cv' => $cv]);

    }
}
