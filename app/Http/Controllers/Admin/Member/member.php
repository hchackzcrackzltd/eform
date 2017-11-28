<?php

namespace App\Http\Controllers\Admin\Member;

use App\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\addmember;
use App\Http\Requests\editmember;

class member extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.member.index',['usr_mem'=>AdminUser::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addmember $request)
    {
        AdminUser::create([
          'name'=>$request->fn.' '.$request->ln,
          'password'=>bcrypt($request->password),
          'username'=>$request->un,
        ]);
        return redirect()->route('member.index')->with('suc','User Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUser $member)
    {
        return redirect()->route('member.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminUser $member)
    {
        return view('admin.member.edit',['data'=>$member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update(editmember $request, AdminUser $member)
    {
      $member->update([
        'name'=>$request->fn.' '.$request->ln,
        'password'=>bcrypt($request->password),
      ]);
      return redirect()->route('member.index')->with('suc','User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUser $member)
    {
        $member->delete();
        return redirect()->route('member.index')->with('suc','User Deleted');
    }
}
