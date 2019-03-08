<?php

namespace App\Http\Controllers;

use App\Cv;

class IndexController extends Controller
{
   

   public function index(){
   $cv1=Cv::orderBy('id','asc')->limit(4)->get();
   $cv2=Cv::orderBy('id','desc')->limit(4)->get();

    return view('index',['cv1'=>$cv1,'cv2'=>$cv2]);
    }


    public function nous(){
    	return view('nous');
    }


    public function step(){
    	return view('step');
    	    }

}
