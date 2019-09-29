<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $registeredUser = Schedule::all();

        return view('backend.pages.schedules')->with([
            'users'=>$registeredUser
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.add_schedule');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $abstract = new Schedule();
        $abstract->time = $request->time;
        $abstract->title =   $request->title;
        $abstract->text =   $request->text;
        $abstract->day =  $request->day;
        $abstract->save();
        return redirect()->route('backend.schedules');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Schedule::where('id',$id)->firstOrFail();


        return view('backend.pages.edit_schedule')->with([
            'user' => $notice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function edit(Speech $speech)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $abstract = Schedule::find($request->id);

        $abstract->time = $request->time;
        $abstract->title =   $request->title;
        $abstract->text =   $request->text;
        $abstract->day =  $request->day;
        $abstract->save();
        return redirect()->route('backend.schedules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::find($id)->delete();
        return redirect()->route('backend.schedules');
    }
}
