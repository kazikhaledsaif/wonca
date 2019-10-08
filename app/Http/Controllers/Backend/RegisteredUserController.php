<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    /**
     *
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registeredUser = User::all();

        return view('backend.pages.registerd_user')->with([
            'users'=>$registeredUser
        ]);
    }
    public function pay($id)
    {
        $user = User::where('id',$id)->firstOrFail();
        $user->payment_status = "Paid";
        $user->save();
       redirect()->back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->firstOrFail();
        return view('backend.pages.registerd_user_deatils')->with([
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
