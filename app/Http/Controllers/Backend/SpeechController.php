<?php

namespace App\Http\Controllers\Backend;

use App\Speech;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registeredUser = Speech::all();

        return view('backend.pages.speeches')->with([
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
        return view('backend.pages.add_speech');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centralPhoto = null;
        $centralPhoto_upload = $request->file('speaker_image');

        if (isset($centralPhoto_upload)) {
            if ($centralPhoto_upload->isValid()) {
                $file_name =
                    uniqid('speech_speaker_image', true) .Str::random(5) . '.' . $centralPhoto_upload->getClientOriginalExtension();
                $centralPhoto = $centralPhoto_upload->storeAs('speech_speaker_image', $file_name);
            }

        }
        $abstract = new Speech();
        $abstract->speech = $request->speech;
        $abstract->speaker_name =   $request->speaker_name;
        $abstract->speaker_type =   $request->speaker_type;
        $abstract->speaker_details =  $request->speaker_details;
        $abstract->speaker_image =  $centralPhoto;
        $abstract->save();
        return redirect()->route('backend.speeches');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Speech::where('id',$id)->firstOrFail();


        return view('backend.pages.edit_speech')->with([
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
        $notice = Speech::find($request->id);

        $notice->speech = $request->speech;
        $notice->speaker_name =   $request->speaker_name;
        $notice->speaker_type =   $request->speaker_type;
        $notice->speaker_details =  $request->speaker_details;

        if($request->speaker_image){
            $noticefile_upload = $request->file('speaker_image');

            if (isset($noticefile_upload)) {
                Storage::delete( $notice->speaker_image);
                if ($noticefile_upload->isValid()) {
                    $file_name =
                        uniqid('speech_speaker_image', true) . Str::random(5) . '.' . $noticefile_upload->getClientOriginalExtension();
                    $noticeFile = $noticefile_upload->storeAs('speech_speaker_image', $file_name);
                    $notice->speaker_image = $noticeFile;
                }

            }



        }

        $notice->save();
        return redirect()->route('backend.speeches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Speech::find($id)->delete();
        return redirect()->route('backend.speeches');
    }
}
