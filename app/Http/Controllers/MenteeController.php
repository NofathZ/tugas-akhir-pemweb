<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class MenteeController extends Controller
{
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
            'days' => $request->qty,
            'isValid' => True
        ]);
    }

    public function redeem(){
        
    }
}
