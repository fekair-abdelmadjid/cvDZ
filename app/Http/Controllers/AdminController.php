<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function __construct(){
      return $this->middleware('auth');
    }
   
    public function index(){
        $user=Auth::user();
        return view('admin.utilisateurs',['user'=>$user]);
    }
}
