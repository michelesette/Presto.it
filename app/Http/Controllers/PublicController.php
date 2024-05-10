<?php

namespace App\Http\Controllers;

use App\Mail\BecomeLessorMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function becomeLessor(){
       
        return view('become-lessor');
    }

    public function becomeLessorSubmit(Request $request){

    //    dd($request->all());
    
}
}
