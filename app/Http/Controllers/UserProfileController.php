<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    //
    public function show($id){
        //$user_details=User::find($id)->get();
        //return view('public-section.profile',compact('user_details'));
    }

    public function edit($id){
        $user=User::find($id);
        return view('public-section.edit',compact('user'));


    }

    public function update(Request $request, $id){
        $this -> validate($request,[
            'name'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255'],

        ]);
        $user=User::findOrFail($id);
        $user->update($request->all());
       return redirect('/userprofile');

    }

    public function index(){

         $authuser=Auth::user()->id;
         $user_type=Auth::user()->role->name;

        $user_details=User::find(1)->whereId($authuser)->get();
       return view('public-section.profile',compact('user_details','user_type'));
    }
}
