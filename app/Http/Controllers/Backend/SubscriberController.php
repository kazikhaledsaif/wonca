<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;

use App\Exports\SubscribersExport;
use Maatwebsite\Excel\Facades\Excel;

class SubscriberController extends Controller
{
    public function index()
    {
        $registeredUser = Subscriber::all();

        return view('backend.pages.subscriber')->with([
            'users'=>$registeredUser
        ]);

    }
    public function export()
    {
        return Excel::download(new SubscribersExport, 'subscribers.xlsx');
    }
}
