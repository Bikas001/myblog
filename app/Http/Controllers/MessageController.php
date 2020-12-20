<?php

namespace App\Http\Controllers;

use App\Models\MessageBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    public function store(Request $request){

        $Message=MessageBox::create($request->all());
        return Redirect::back()->with('message','Operation Successful !');
    }
}
