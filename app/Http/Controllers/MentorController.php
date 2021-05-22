<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Course;
use App\Models\Teaches;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MentorController extends Controller
{
    public function showMentees(){
        $id = Auth::id();
        $mentees = DB::table('users')->whereIn('id', function($query) use($id){
            $query->select('id_mentee')->from('schedules')->where('id_mentor', $id);
        })->get();
        return view('mentor-list-mentee')->with('mentees', $mentees);
    }

    public function showMenteeInfo($id){
        $info = User::all()->where('id', $id);
        return view('mentor-detail-mentee')->with('info', $info);
    }

    public function setting(){
        $id = Auth::id();
        $mentor = User::all()->where('id', $id);
        $teaches = DB::table('courses')->whereIn('id_course', function($q) use($id){
            $q->select('id_course')->from('teaches')->where('id_mentor', $id);
        })->get();
        $courses = Course::all();
        return view('mentor-setting')->with('mentor', $mentor)->with('teaches', $teaches)->with('courses', $courses);
    }

    public function updateInfo(Request $request){
        $id = Auth::id();
        User::where('id', $id)
        ->update([
            'phone_number'=> $request->phone_number,
            'price'=> $request->price,
            'description' => $request->description
            ]);
        $teach_old = Teaches::where('id_mentor', $id);
        $teach_old->delete();
        foreach($request->subjects as $subject){
            Teaches::create([
                'id_mentor' => $id,
                'id_course' => $subject
            ]);
        }
        return redirect('/mentor/setting');
    }

    public function showSchedule(){

    }
}
