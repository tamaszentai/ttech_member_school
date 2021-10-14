<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\School;
use Error;

class MemberController extends Controller
{
    public function list()
    {
        $members = Member::with('schools')->get();

        return view('list', compact('members'));
    }


    public function create()
    {
        $schools = School::all();

        return view('create', compact('schools'));
    }


    public function store()
    {
        $member = new Member;
        $member->name = request('name');
        $member->email = request('email');
        $schoolId = request('school_id');
        $request = request('email');

        $user = Member::where('email', '=', $request)->first();

        if ($user === null) {
            $member->save();
            $member->schools()->attach($schoolId);
            return view('newmember');
        } else {
            $school = request('school_id');
            $user->schools()->attach($school);
            return view('school', compact('member'));
        }
    }
}
