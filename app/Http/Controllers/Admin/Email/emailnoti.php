<?php

namespace App\Http\Controllers\Admin\Email;

use App\Http\Controllers\Controller;
use App\Model\Masterdata\emailnoti as db;
use Illuminate\Http\Request;

class emailnoti extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.email.index',['data'=>db::find(1)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Masterdata\emailnoti  $emailnoti
     * @return \Illuminate\Http\Response
     */
    public function show(db $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Masterdata\emailnoti  $emailnoti
     * @return \Illuminate\Http\Response
     */
    public function edit(db $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Masterdata\emailnoti  $emailnoti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, db $email)
    {
        $this->validate($request,[
          'em'=>'required|email'
        ]);
        $email->update([
          'email'=>$request->em
        ]);
        return redirect()->route('email.index')->with('suc','E-Mail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Masterdata\emailnoti  $emailnoti
     * @return \Illuminate\Http\Response
     */
    public function destroy(db $email)
    {
        //
    }
}
