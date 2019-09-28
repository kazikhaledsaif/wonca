<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $registeredUser = Subscriber::all();

        return view('backend.pages.subscriber')->with([
            'users'=>$registeredUser
        ]);

    }
}
