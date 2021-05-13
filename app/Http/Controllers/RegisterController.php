<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function mentorSignUp(){
        return view('auth.mentor-signup');
    }

    public function menteeSignUp(){
        return view('auth.mentee-signup');
    }

    public function addMentor(Request $request){
        $mentor = new User;
        $mentor->name = $request->name;
        $mentor->email = $request->email;
        $mentor->password = $request->password;

        $mentor->save();
        return view('auth.login');
    }
    
    public function addMentee(Request $request){
        $mentee = new User;
        $mentee->name = $request->name;
        $mentee->email = $request->email;
        $mentee->password = $request->password;

        $mentee->save();
        return view('auth.login');
    }
    
}
