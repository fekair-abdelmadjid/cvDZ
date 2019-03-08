<?php

namespace App\Http\Controllers;


use App\User;
use Auth;
use App\Http\Requests\userRequest;
use App\Cv;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function edit()
    {
        $infouser = User::find(Auth::user()->id);
        if(isset(Auth::user()->cvs->titre)){
            return view('user.edit', ['infouser' => $infouser]);
        }else{
            return view('cv.create');
        }

    }


    public function update(userRequest $request, $id)
    {

        $infouser = User::find($id);
        $infouser->FamilyName = $request->input('FamilyName');
        $infouser->FirstName = $request->input('FirstName');
        $infouser->name = $request->input('name');
        $infouser->email = $request->input('email');
        $infouser->Phone = $request->input('Phone');
        $infouser->DateBirth = $request->input('DateBirth');
        $infouser->Wilaya = $request->input('Wilaya');
        $infouser->Adresse = $request->input('Adresse');
        $infouser->PathFac = $request->input('PathFac');
        $infouser->Pathtwi = $request->input('Pathtwi');
        $infouser->Pathgoo = $request->input('Pathgoo');
        if ($request->hasFile('photo')) {
            $request->file('photo');
            $infouser->photo =Storage::disk('uploads')->put('Userphoto',$request->photo);
        }
        $this->authorize($infouser);
        $infouser->save();
        session()->flash('success', 'Les information bien enregistrer');

        return redirect('users/edit');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users/edit');


    }
}
