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
        $list = DB::table('schedules')
        ->join('users', 'schedules.id_mentee', '=', 'users.id')
        ->join('courses', 'schedules.id_course', '=', 'courses.id_course')
        ->select(
            'users.id as mentee_id',
            'schedules.id as schedule_id',
            'users.name as mentee_name',
            'image',
            'courses.name as course_name',
            'degree'
            )
        ->where('id_mentor', $id)
        ->get();
        return view('mentor-list-mentee')->with('list', $list);
    }

    public function showMenteeInfo(Request $request){
        $schedule_id = $request->id;
        $list = DB::table('schedules')
        ->join('users', 'schedules.id_mentee', '=', 'users.id')
        ->join('courses', 'schedules.id_course', '=', 'courses.id_course')
        ->select(
            'users.id as mentee_id',
            'image',
            'end_session',
            'courses.id_course as course_id',
            'users.name as mentee_name',
            'email',
            'phone_number',
            'courses.name as course_name',
            'degree'
        )
        ->where('schedules.id', $schedule_id)
        ->get(); 
        return view('mentor-detail-mentee')->with('list', $list);
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

    public function showEndSession(Request $request){
        $id = $request->id;
        $id_course = $request->subject;
        $mentee = User::all()->where('id', $id);
        $subject = Course::all()->where('id_course', $id_course);
        return view('mentor-stop-session')->with('mentee', $mentee)->with('subject', $subject);
    }

    public function requestEndSession(Request $request){
        $id_mentee = $request->id;
        $id_mentor = Auth::id();
        $id_course = $request->subject;
        Schedule::where('id_mentor', $id_mentor)->where('id_mentee', $id_mentee)->where('id_course', $id_course)
        ->update([
            'end_session'=> 1
            ]);
        return redirect('/mentor/list-mentee');
    }
}
