<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('frontend.pages.workshop');
    }

    public function store(Request $request)
    {
        $workshop = new Workshop();
        $workshop->uid = $request->userid;
        $workshop->title = $request->title;
        $workshop->author = $request->author;
        $workshop->abstract = $request->abstract;

        $workshop->save();

        return view('frontend.pages.home');

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
