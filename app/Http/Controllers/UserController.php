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
        $data = [
            'details' => $details,
            'subjects' => $subjects
        ];
        // return view('mentee-detail-mentor')->with('data', ['details' => $details, 'subjects' => $subjects]);
        return view('mentee-detail-mentor')->with('details', $details)->with('subjects', $subjects);
    }
}
