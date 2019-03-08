<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContacteRequest;
use Illuminate\Support\Facades\Mail;

class ContacteController extends Controller
{

    public function index()
    {
        return view('contacte.index');
    }


    public function send(ContacteRequest $request){

        $data=array(
            'email'=>$request->email,
            'subject'=>$request->titre,
            'bodymessage'=>$request->message
        );

        Mail::send('contacte.emails',$data,function ($message) use($data){
              $message->from($data['email']);
              $message->to('fekair.abdelmadjid@gmail.com');
              $message->subject($data['subject']);
        });

        session()->flash('success', 'le message bien envoyer');
        return redirect('contacte');

    }
}
