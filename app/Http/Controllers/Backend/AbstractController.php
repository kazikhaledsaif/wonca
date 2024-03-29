<?php

namespace App\Http\Controllers\Backend;

use App\AbstractSubmission;
use App\Http\Controllers\Controller;
use App\Mail\AbstractMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AbstractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registeredUser = AbstractSubmission::all();

        return view('backend.pages.abstract')->with([
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
        //
    }
    public function frontend()
    {

        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }

        else{
            return view('frontend.pages.abstract');
        }



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $abstract = new AbstractSubmission();

        $abstract->uid = auth()->user()->id;
        $abstract->title = $request->title;
        $abstract->author =   $request->author;
        $abstract->abstract =  $request->abstract;
        $abstract->save();

        $data = $abstract;


        Mail::to(Auth::user()->email)->send(new AbstractMail($data));

        return back()->with('success','Abstract Submitted Successfully, Thank You.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = AbstractSubmission::where('id',$id)->firstOrFail();
        return view('backend.pages.abstract_details')->with([
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
