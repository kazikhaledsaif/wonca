<?php

namespace App\Http\Controllers;

use App\AbstractSubmit;
use Illuminate\Http\Request;

class AbstractSubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\AbstractSubmit  $abstractSubmit
     * @return \Illuminate\Http\Response
     */
    public function show(AbstractSubmit $abstractSubmit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AbstractSubmit  $abstractSubmit
     * @return \Illuminate\Http\Response
     */
    public function edit(AbstractSubmit $abstractSubmit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AbstractSubmit  $abstractSubmit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbstractSubmit $abstractSubmit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AbstractSubmit  $abstractSubmit
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbstractSubmit $abstractSubmit)
    {
        //
    }
}
