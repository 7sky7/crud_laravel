<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Member;

class MemberController extends Controller
{

  public function index()
  {

  }
  public function top()
    {
      //memberテーブルからname,phone,emailを$membersに格納
      $members=DB::table('members')
        ->select('id', 'name', 'phone', 'email')
        ->get();

      //viewを返す(compactでviewに$membersを渡す)
      return view('member.top', compact('members'));
    }

  public function create()
    {
      return view('member/create');
    }

public function store(Request $request)
  {
    $member=new Member;

    $member->name=$request->input('name');
    $member->phone=$request->input('phone');
    $member->email=$request->input('email');

    $member->save();

    //一覧表示画面にリダイレクト
    return redirect('member/top');
  }

public function show($id)
  {
    $member=Member::find($id);

    return view('member/show', compact('member'));
  }

public function edit($id)
  {
    $member=Member::find($id);

    return view('member/edit', compact('member'));
  }

public function update(Request $request, $id)
  {
    $member=Member::find($id);
    
    $member->name=$request->input('name');
    $member->phone=$request->input('phone');
    $member->email=$request->input('email');

    //DBに保存
    $member->update();

    //処理が終わったらmember/topにリダイレクト
    return redirect('member/top');
  }

  public function destroy($id)
  {
    $member=Member::find($id);

    $member->delete();

    return redirect('member/top');
  }
}
