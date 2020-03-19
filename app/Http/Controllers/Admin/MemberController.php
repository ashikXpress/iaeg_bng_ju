<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MemberPayment;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function unapprovedMemberList()
    {
        $members=Member::orderBy('id')->where('is_member',2)->paginate(10);
        return view('admin.member.unapproved_member',compact('members'));
    }
    public function approvedMemberList()
    {
        $members=Member::orderBy('id')->where('is_member',1)->paginate(10);
        return view('admin.member.approved_member',compact('members'));
    }

    public function approvedMember($id,Request $request)
    {
        Member::where('id',$id)->update([
            'is_member'=>1,
        ]);
        $request->session()->flash('success','Member successfully Approved');
        return redirect()->back();
    }
    public function memberSuspend($id,Request $request)
    {
        Member::where('id',$id)->update([
            'is_member'=>2,
        ]);
        $request->session()->flash('success','Member Suspend Successful');
        return redirect()->back();
    }

    public function memberPaymentDetails(Request $request) {
        $memberPayment = MemberPayment::where('member_id', $request->id)->first()->toArray();
        $memberPayment['bank_cheque'] = asset($memberPayment['bank_cheque']);

        return response()->json($memberPayment);
    }

    public function evenTechnicalJoinUnapproved()
    {

        return view('admin.event_join.unapproved_technical');
    }
}
