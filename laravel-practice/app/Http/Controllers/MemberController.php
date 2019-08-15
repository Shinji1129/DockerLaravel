<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function getIndex() {
        $query = \App\Member::query();
        $members = $query->orderBy('id','desc')->paginate(10);
        return view('layouts.member.list')->with('members',$members);
    }
}
