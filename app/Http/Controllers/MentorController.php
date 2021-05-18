<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MentorController extends Controller
{
    public function showMentees(){
        $id = Auth::id();
        $mentees = DB::table('users')->whereIn('id', function($query){
            $query->select('id_mentee')->from('schedules')->where('id_mentor', 2);
        })->get();
        return view('mentor-list-mentee')->with('mentees', $mentees);
    }

    public function showMenteeInfo($id){
        $info = User::all()->where('id', $id);
        return view('mentor-detail-mentee')->with('info', $info);
    }

    public function showSchedule(){

    }
}
