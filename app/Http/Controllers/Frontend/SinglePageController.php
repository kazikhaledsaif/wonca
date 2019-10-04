<?php

namespace App\Http\Controllers\Frontend;

use App\AbstractSubmission;
use App\Category;
use App\Http\Controllers\Controller;
use App\ImportantDate;
use App\Workshop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SinglePageController extends Controller
{
    public function dashboard(){

        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }

        else{

            $cat = Auth::user()->reg_category;
            $cbn = Carbon::now()->toDateString();   /* current date*/
            $user = Auth::user();
            $abs = AbstractSubmission::where('uid','=', $user->id)->count();
            $work = Workshop::where('uid','=', $user->id)->count();

            $amount = Category::select('code','currency','amount','started_at','finished_at')
                ->where('code',$cat)
                ->whereDate('started_at','<=', $cbn)
                ->whereDate('finished_at','>=', $cbn)
                ->firstOrFail()
                ;

//        dd($amount);
            return view('frontend.pages.dashboard')->with([
                'user' => $user,
                'abs' => $abs,
                'work' => $work,
                'amount' => $amount,
            ]);
        }


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
