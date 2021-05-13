<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Code;

class AdminController extends Controller
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
    
    public function showMentors(){
        $mentors = User::where('verification_status', 'Unverified');
        return view('', $mentors);
    }

    public function showMentorInfo(){
        $id = $_POST['id'];
        $info = User::where('id', $id);
        return view('', $info);
    }

    public function verifyMentor(){
        $id = $_POST['id'];
        User::where('id', $id)->update(['verification_status' => 'Verified']);
    }

    public function rejectMentor(){
        $id = $_POST['id'];
        User::where('id', $id)->update(['verification_status' => 'Rejected']);
    }
    
    public function showCodes(){
        $codes = Code::all();
        return view('admin-list-voucher', $codes);
    }

    public function addCode(Request $request){
        $code = new Code;
        $code->id = $request->id;
        $code->nominal = $request->nominal;
        $code->status = "Available";

        $code->save();
        return view('admin-tambah-voucher');
    }

    // NGETES
    public function insert(Request $request){
    
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone_number = $request->phone;
        $user->verification_status = $request->status;
    
        $user->save();
    }
}
