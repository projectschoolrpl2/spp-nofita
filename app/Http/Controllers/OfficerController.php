<?php

namespace App\Http\Controllers;

use App\Models\officer;
use App\Http\Requests\StoreofficerRequest;
use App\Http\Requests\UpdateofficerRequest;

use App\Exports\officerExport;
use Maatwebsite\Excel\Facades\Excel;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['officer'] = officer::get();
        return view('officer.index')->with($data);
    }

    public function export() 
    {
        return Excel::download(new officerExport, 'officer.xlsx');
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
     * @param  \App\Http\Requests\StoreofficerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreofficerRequest $request)
    {
        officer::create($request->all());

        return redirect('officer')->with('success', 'Input data petugas berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function show(officer $officer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function edit(officer $officer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateofficerRequest  $request
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateofficerRequest $request, officer $officer)
    {
        $officer->update($request->all());

        return redirect('officer')->with('success', 'Success !! The officer data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(officer $officer)
    {
        $officer->delete();

        return redirect('officer')->with('success', 'Delete data Petugas berhasil!');
    }
}
