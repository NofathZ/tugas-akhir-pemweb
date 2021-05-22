<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Code;
use Illuminate\Support\Facades\DB;


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
        $subjects = DB::table('courses')->whereIn('id_course', function($query) use($id){
            $query->select('id_course')->from('teaches')->where('id_mentor', $id);
        })->get();
        return view('admin-verifikasi-mentor')->with('info', $info)->with('subjects', $subjects);
    }
    
    public function verifyMentor($id){
        User::where('id', $id)->update(['verification_status' => 'Verified']);
        return redirect('/admin/list-mentor');
    }

    public function rejectMentor($id){
        User::where('id', $id)->delete();
        return redirect('/admin/list-mentor');
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
