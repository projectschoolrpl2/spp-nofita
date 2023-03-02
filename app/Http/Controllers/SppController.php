<?php

namespace App\Http\Controllers;

use App\Models\spp;
use App\Http\Requests\StoresppRequest;
use App\Http\Requests\UpdatesppRequest;

// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SppExport;
use App\Http\Controllers\Controller;
use App\Imports\SppImport;

class SppController extends Controller
{
    
    public function index()
    {
        $data['spp'] = spp::get();
        return view('spp.index')->with($data);
    }

   
    public function create()
    {
        //
    }

   
    public function store(StoresppRequest $request)
    {
        spp::create($request->all());

        return redirect('spp')->with('success', 'Input data SPP berhasil!');
    }

   
    public function show(spp $spp)
    {
        //
    }

    
    public function edit(spp $spp)
    {
        //
    }

   
    public function update(UpdatesppRequest $request, spp $spp)
    {
        $spp->update($request->all());

        return redirect('spp')->with('success', 'Success !! The SPP data has been updated');
    }

   
    public function destroy(spp $spp)
    {
        $spp->delete();

        return redirect('spp')->with('success', 'Delete data spp berhasil dilakukan!');
    }

    public function exportData(){
        $date = date('Y-m-d');
        return Excel::download(new SppExport, $date.'_spp.xlsx');
    }

    public function importData(){
        Excel::import(new SppImport, request()->file('import'));

        return redirect('spp')->with('success', 'Import data SPP berhasil!');
    }
}
