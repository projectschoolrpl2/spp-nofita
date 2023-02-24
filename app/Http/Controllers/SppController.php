<?php

namespace App\Http\Controllers;

use App\Models\spp;
use App\Http\Requests\StoresppRequest;
use App\Http\Requests\UpdatesppRequest;

class SppController extends Controller
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
     * @param  \App\Http\Requests\StoresppRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresppRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function show(spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function edit(spp $spp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesppRequest  $request
     * @param  \App\Models\spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesppRequest $request, spp $spp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp $spp)
    {
        //
    }
}
