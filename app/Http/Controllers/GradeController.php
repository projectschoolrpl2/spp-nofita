<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Http\Requests\StoregradeRequest;
use App\Http\Requests\UpdategradeRequest;

class GradeController extends Controller
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
     * @param  \App\Http\Requests\StoregradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregradeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategradeRequest  $request
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategradeRequest $request, grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(grade $grade)
    {
        //
    }
}
