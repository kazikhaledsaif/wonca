<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\ImportantDate;
use Illuminate\Http\Request;

class ImportantDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registeredUser = ImportantDate::all();

        return view('backend.pages.dates')->with([
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
        return view('backend.pages.add_date');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abstract = new ImportantDate();

        $abstract->title =   $request->title;
        $abstract->details =  $request->details;

        $abstract->save();
        return redirect()->route('backend.dates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = ImportantDate::where('id',$id)->firstOrFail();


        return view('backend.pages.edit_date')->with([
            'user' => $notice
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
    public function update(Request $request)
    {
        $abstract = ImportantDate::find($request->id);

        $abstract->title =   $request->title;
        $abstract->details =  $request->details;

        $abstract->save();
        return redirect()->route('backend.dates');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImportantDate::find($id)->delete();
        return redirect()->route('backend.dates');
    }
}
