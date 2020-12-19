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
        $user=findOrFail($id);
        return view('userprofile.edit',compact('user'));


    }

    public function index(){

         $authuser=Auth::user()->id;
         $user_type=Auth::user()->role->name;

        $user_details=User::find(1)->whereId('1')->get();
       return view('public-section.profile',compact('user_details','user_type'));
    }
}
