<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use App\Models\Code;

class MenteeController extends Controller
{

    public function showMentors(){
        $id = Auth::id();
        $mentors = DB::table('users')->whereIn('id', function($query) use($id){
            $query->select('id_mentor')->from('schedules')->where('id_mentee', $id)->where('isValid', 1);
        })->get();
        return view('mentee-list-mentor')->with('mentors', $mentors);
    }

    public function showOrder($id){
        $details = User::all()->where('id', $id);
        $subjects = DB::table('courses')->whereIn('id_course', function($query) use($id){
            $query->select('id_course')->from('teaches')->where('id_mentor', $id);
        })->get();
        // return view('mentee-detail-mentor')->with('data', ['details' => $details, 'subjects' => $subjects]);
        return view('mentee-order')->with('details', $details)->with('subjects', $subjects);
    }

    public function order(Request $request){
        $schedule = Schedule::create([
            'id_mentor' => $request->id,
            'id_mentee' => Auth::id(),
            'id_course' => $request->subject,
            'days' => $request->qty,
            'isValid' => True
        ]);
        return redirect('/mentee/list-mentor');
    }

    public function redeem(Request $request){
        $code = $request->id;
        $check = Code::where('id_code', $code)->where('status', 'Available')->get();
        $count = $check->count();
        if($count == 0){
            return redirect('/mentor/redeem-voucher');
        }
        elseif($count == 1){
            $id = Auth::id();
            $nominal = DB::table('codes')->where('id_code', $code)->select('nominal')->get()->all();
            $money = DB::table('users')->where('id', $id)->select('money')->get()->all();
            $nominal = json_decode(json_encode($nominal), true);
            $money = json_decode(json_encode($money), true);
            $money_update = $money[0]['money'] + $nominal[0]['nominal'];
            User::where('id', $id)
            ->update([
                'money'=> $money_update
            ]);
            Code::where('id_code', $code)
            ->update([
                'status' => 'Unavailable'
            ]);
            return redirect('/home');
        }

    }
}
