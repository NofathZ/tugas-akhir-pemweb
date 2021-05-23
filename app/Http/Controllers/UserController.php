<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teaches;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showMentorDetail($id){
        $details = User::all()->where('id', $id);
        $subjects = DB::table('courses')->whereIn('id_course', function($query) use($id){
            $query->select('id_course')->from('teaches')->where('id_mentor', $id);
        })->get();
        // return view('mentee-detail-mentor')->with('data', ['details' => $details, 'subjects' => $subjects]);
        return view('detail-mentor')->with('details', $details)->with('subjects', $subjects);
    }

    public function showSearchPage(){
        $mentors = User::all()->where('role', 'mentor')->where('verification_status', 'Verified');
        $list = DB::table('teaches')
        ->join('users', 'teaches.id_mentor', '=', 'users.id')
        ->join('courses', 'teaches.id_course', '=', 'courses.id_course')
        ->select(
            'users.id as mentor_id',
            'users.name as mentor_name',
            'image',
            'phone_number',
            'courses.id_course as course_id',
            'courses.name as course_name',
            'degree',
            'price'
        )
        ->where('role', 'mentor')
        ->where('users.verification_status', 'Verified')
        ->get();
        return view('mentee-search')->with('mentors', $mentors)->with('list', $list);
    }

    public function searchAndFilter(Request $request){
        $name = $request->name;
        $subjects = $request->subjects;
        if($subjects == null){
            $subjects = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
        }
        $mentors = User::where('role', 'mentor')
        ->where('verification_status', 'Verified')
        ->where('name', 'LIKE', '%'.$name.'%')
        ->get();
        $list = DB::table('teaches')
        ->join('users', 'teaches.id_mentor', '=', 'users.id')
        ->join('courses', 'teaches.id_course', '=', 'courses.id_course')
        ->select(
            'users.id as mentor_id',
            'users.name as mentor_name',
            'image',
            'phone_number',
            'courses.id_course as course_id',
            'courses.name as course_name',
            'degree',
            'price'
        )
        ->where('role', 'mentor')
        ->where('users.verification_status', 'Verified')
        ->whereIn('courses.id_course', $subjects)
        ->get();
        $list_mentor = DB::table('teaches')
        ->join('users', 'teaches.id_mentor', '=', 'users.id')
        ->join('courses', 'teaches.id_course', '=', 'courses.id_course')
        ->select(
            'users.id as mentor_id'
        )
        ->where('role', 'mentor')
        ->where('users.verification_status', 'Verified')
        ->whereIn('courses.id_course', $subjects)
        ->groupBy('users.id')
        ->get();
        // var_dump($id_course);
        return view('mentee-search-result')->with('mentors', $mentors)->with('list', $list)->with('list_mentor', $list_mentor);
    }

}
