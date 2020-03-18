<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function unapprovedMemberList()
    {
        $members=Member::orderBy('id','desc')->where('status',0)->paginate(10);
        return view('admin.member.unapproved_member',compact('members'));
    }
    public function approvedMemberList()
    {
        $members=Member::where('status',1)->paginate(10);
        return view('admin.member.approved_member',compact('members'));
    }

    public function approvedMember($id,Request $request)
    {
        Member::where('id',$id)->update([
            'status'=>1,
        ]);
        $request->session()->flash('success','Member successfully Approved');
        return redirect()->back();
    }
    public function memberSuspend($id,Request $request)
    {
        Member::where('id',$id)->update([
            'status'=>0,
        ]);
        $request->session()->flash('success','Member Suspend Successful');
        return redirect()->back();
    }
}
