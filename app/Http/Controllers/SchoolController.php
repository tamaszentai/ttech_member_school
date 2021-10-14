<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Member;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function list($school)
    {
        $school_name = School::find($school);
        $members = Member::whereHas('schools', function ($q) use ($school) {
            $q->where('id', $school);
        })->get();

        return view('schoollist', compact('members', 'school_name'));
    }
}
