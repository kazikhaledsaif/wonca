<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registeredUser = Slider::all();

        return view('backend.pages.sliders')->with([
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

        return view('backend.pages.add_slider');
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
        $centralPhoto_upload = $request->file('slider_image');

        if (isset($centralPhoto_upload)) {
            if ($centralPhoto_upload->isValid()) {
                $file_name =
                    uniqid('slider_image', true) .Str::random(5) . '.' . $centralPhoto_upload->getClientOriginalExtension();
                $centralPhoto = $centralPhoto_upload->storeAs('slider_image', $file_name);
            }

        }
        $abstract = new Slider();

        $abstract->slider_details =  $request->slider_details;
        $abstract->slider_image =  $centralPhoto;
        $abstract->save();
        return redirect()->route('backend.sliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Slider::where('id',$id)->firstOrFail();


        return view('backend.pages.edit_slider')->with([
            'user' => $notice
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $notice = Slider::find($request->id);

        $notice->slider_details =  $request->slider_details;

        if($request->slider_image){
            $noticefile_upload = $request->file('slider_image');

            if (isset($noticefile_upload)) {
                Storage::delete( $notice->slider_image);
                if ($noticefile_upload->isValid()) {
                    $file_name =
                        uniqid('slider_image', true) . Str::random(5) . '.' . $noticefile_upload->getClientOriginalExtension();
                    $noticeFile = $noticefile_upload->storeAs('slider_image', $file_name);
                    $notice->slider_image = $noticeFile;
                }

            }



        }

        $notice->save();
        return redirect()->route('backend.sliders');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->route('backend.sliders');
    }
}
