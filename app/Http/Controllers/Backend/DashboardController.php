<?php

namespace App\Http\Controllers\Backend;

use App\AbstractSubmission;
use App\Http\Controllers\Controller;
use App\Subscriber;
use App\User;
use App\Workshop;
use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 /*       Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);*/

        $subs = Subscriber::count();
        $user = User::count();
        $abstract = AbstractSubmission::count();
        $workshop = Workshop::count();
        $order = DB::table('orders')->count();
        $bdt = DB::table('orders')
            ->where('currency','BDT')
            ->sum('amount');
        $usd = DB::table('orders')
            ->where('currency','USD')
            ->sum('amount');

//        dd($subs);

        return view('backend.pages.dashboard')->with([
            'subs' => $subs,
            'user' => $user,
            'abstract' => $abstract,
            'workshop' => $workshop,
            'order' => $order,
            'bdt' => $bdt,
            'usd' => $usd,

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
