<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\ImportantDate;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function dashboard(){
        return view('frontend.pages.dashboard');
    }

    public function payment_success(){
        return view('frontend.pages.payment-success');
    }

    public function payment_fail(){
        return view('frontend.pages.payment-fail');
    }

    public function dates(){

        $dates = ImportantDate::take(50)->get();

        return view('frontend.pages.dates')->with([
            'dates' => $dates
        ]);
    }
}
