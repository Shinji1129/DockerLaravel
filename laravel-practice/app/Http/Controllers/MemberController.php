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

    public function new_index() {
        return view('layouts.member.new_index');
    }

    public function new_confirm(\App\Http\Requests\CheckMemberRequest $request) {
        $data = $request->all();
        return view('layouts.member.new_confirm')->with($data);
    }

    public function new_finish(Request $request) {
        $member = new \App\Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->tel = $request->tel;
        $member->addr = $request->addr;
        $member->birth = $request->birth;
        $member->save();
        return redirect()->to('member/list');
    }
}
