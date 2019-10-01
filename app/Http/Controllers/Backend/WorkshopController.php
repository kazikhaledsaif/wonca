<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\WorkshopMail;
use App\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registeredUser = Workshop::all();

        return view('backend.pages.workshop')->with([
            'users'=>$registeredUser
        ]);
    }
    public function frontend()
    {
        return view('frontend.pages.workshop');
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
        $abstract = new Workshop();
        $abstract->uid = auth()->user()->id;
        $abstract->title = $request->title;
        $abstract->author =   $request->author;
        $abstract->abstract =  $request->abstract;
        $abstract->save();

        $data = $abstract;

        Mail::to(Auth::user()->email)->send(new WorkshopMail($data));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Workshop::where('id',$id)->firstOrFail();
        return view('backend.pages.workshop_details')->with([
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
