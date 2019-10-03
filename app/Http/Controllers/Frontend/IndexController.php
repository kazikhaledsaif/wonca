<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\ImportantDate;
use App\Schedule;
use App\Slider;
use App\Speech;
use App\Subscriber;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $keynote = Speech::where('speaker_type', '=', 'keynote_speaker')->first();

        $slider_speech = Speech::where('speaker_type', '=', 'front_speaker')->take(5)->get();

        $slider = Slider::take(5)->get();

        $dates = ImportantDate::take(6)->get();

        $day1 = Schedule::where('day','day1')->take(10)->get();
        $day2 = Schedule::where('day','day2')->take(10)->get();
        $day3 = Schedule::where('day','day3')->take(10)->get();
        $day4 = Schedule::where('day','day4')->take(10)->get();

        $speakers =  Speech::where('speaker_type', '=', 'normal_speaker')->take(8)->get();


        return view('frontend.pages.home')->with([
            'keynote_speaker' => $keynote,
            'slider_speech' => $slider_speech,
            'sliders' => $slider,
            'dates' => $dates,

            'day1' => $day1,
            'day1' => $day1,
            'day2' => $day2,
            'day3' => $day3,
            'day4' => $day4,

            'speakers' => $speakers,

            ]);
    }

    public function subscriber(Request $request)
    {
        $abstract = new Subscriber();


        $abstract->email =  $request->subscriber;
        $abstract->save();
        return redirect()->back();
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
        //
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
