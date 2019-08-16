<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function getIndex(Request $rq)
    {
        $keyword = $rq->input('keyword');
        $query = \App\Member::query();

        if(!empty($keyword))
        {
        $query->where('email','like','%'.$keyword.'%')->orWhere('name','like','%'.$keyword.'%');
        }

         $members = $query->orderBy('id','desc')->paginate(10);
         return view('layouts.member.list')->with('members',$members)->with('keyword',$keyword);
    }

    public function new_index()
    {
        return view('layouts.member.new_index');
    }

    public function new_confirm(\App\Http\Requests\CheckMemberRequest $request)
    {
        $data = $request->all();
        return view('layouts.member.new_confirm')->with($data);
    }

    public function new_finish(Request $request)
    {
        $member = new \App\Member;

        $member->name = $request->name;
        $member->email = $request->email;
        $member->tel = $request->tel;
        $member->addr = $request->addr;
        $member->birth = $request->birth;
        $member->save();

        return redirect()->to('member/list');
    }

    public function edit_index($id)
    {
        $member = \App\Member::findOrFail($id);
        return view('layouts.member.edit_index')->with('member',$member);
    }

    public function edit_confirm(\App\Http\Requests\CheckMemberRequest $request)
    {
        $data = $request->all();
        return view('layouts.member.edit_confirm')->with($data);
    }

    public function edit_finish(Request $request, $id)
    {
        $member = \App\Member::findOrFail($id);

        $member->name = $request->name;
        $member->email = $request->email;
        $member->tel = $request->tel;
        $member->addr = $request->addr;
        $member->birth = $request->birth;
        $member->save();

        return redirect()->to('member/list');
    }

    public function member_delete($id)
    {
        $member = \App\Member::find($id);
        $member->delete();

        return redirect()->to('member/list');
    }

}
