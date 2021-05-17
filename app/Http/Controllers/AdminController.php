<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Code;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showMentors(){
        $mentors = User::all()->where('verification_status', 'Unverified');
        return view('admin-list-mentor')->with('mentors', $mentors);
    }

    public function showMentorInfo($id){
        $info = User::all()->where('id', $id);
        return view('admin-verifikasi-mentor')->with('info', $info);
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
        return view('admin-list-voucher')->with('codes', $codes);
    }

    public function addCode(Request $request){
        $code = new Code;
        $code->id_code = $request->id;
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
