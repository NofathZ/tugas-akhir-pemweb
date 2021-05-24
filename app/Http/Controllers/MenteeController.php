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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showMentors(){
        $id = Auth::id();
        $list = DB::table('schedules')
        ->join('users', 'schedules.id_mentor', '=', 'users.id')
        ->join('courses', 'schedules.id_course', '=', 'courses.id_course')
        ->select(
            'users.id as mentor_id',
            'schedules.id as schedule_id',
            'users.name as mentor_name',
            'image',
            'courses.name as course_name',
            'degree'
            )
        ->where('id_mentee', $id)
        ->get();
        return view('mentee-list-mentor')->with('list', $list);
    }

    public function showMentorInfo(Request $request){
        $schedule_id = $request->id;
        $list = DB::table('schedules')
        ->join('users', 'schedules.id_mentor', '=', 'users.id')
        ->join('courses', 'schedules.id_course', '=', 'courses.id_course')
        ->select(
            'users.id as mentor_id',
            'image',
            'end_session',
            'courses.id_course as course_id',
            'users.name as mentor_name',
            'email',
            'phone_number',
            'courses.name as course_name',
            'degree',
            'schedules.id as schedule_id',
            'days'
        )
        ->where('schedules.id', $schedule_id)
        ->get(); 
        return view('mentee-detail-mentor')->with('list', $list);
    }

    public function showVerification(Request $request){
        $schedule_id = $request->id;
        $list = DB::table('schedules')
        ->join('users', 'schedules.id_mentor', '=', 'users.id')
        ->join('courses', 'schedules.id_course', '=', 'courses.id_course')
        ->select(
            'users.name as mentor_name',
            'courses.name as course_name',
            'degree',
            'schedules.id as schedule_id'
        )
        ->where('schedules.id', $schedule_id)
        ->get();
        return view('mentee-verification-stop-session')->with('list', $list);
    }

    public function endSession(Request $request){
        $schedule_id = $request->id;
        // $schedule = Schedule::find($schedule_id);
        // $schedule->delete();
        Schedule::destroy($schedule_id);
        return redirect('/mentee/list-mentor');
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
        $id_mentee = Auth::id();
        $id_mentor = $request->id;
        $price = DB::table('users')->where('id', $id_mentor)->select('price')->get()->all();
        $money = DB::table('users')->where('id', $id_mentee)->select('money')->get()->all();
        $price = json_decode(json_encode($price), true)[0]['price'];
        $money = json_decode(json_encode($money), true)[0]['money'];
        $qty = $request->qty;
        $cost = $price * $qty;
        // var_dump($money);
        // var_dump($cost);
        if($money < $cost){
            return redirect('/mentee/order/'. $id_mentor);
        }
        else{
            Schedule::create([
                'id_mentor' => $request->id,
                'id_mentee' => Auth::id(),
                'id_course' => $request->subject,
                'days' => $request->qty,
                'isValid' => True
            ]);
            User::where('id', $id_mentee)
            ->update([
                'money'=> $money-$cost
            ]);
            return redirect('/mentee/list-mentor');

        }
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
            return redirect('/search');
        }

    }
}
