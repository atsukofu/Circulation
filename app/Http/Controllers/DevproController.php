<?php

namespace App\Http\Controllers;

use App\Models\Devpro;
use Illuminate\Http\Request;

class DevproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $develops = Devpro::all();
        return view('devlist', ['develops'=>$develops]);
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
     * @param  \App\Models\Devpro  $devpro
     * @return \Illuminate\Http\Response
     */
    public function show(Devpro $devpro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devpro  $devpro
     * @return \Illuminate\Http\Response
     */
    public function edit(Devpro $devpro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devpro  $devpro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devpro $devpro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devpro  $devpro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devpro $devpro)
    {
        //
    }
}
