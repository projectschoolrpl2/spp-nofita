<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Http\Requests\StoregradeRequest;
use App\Http\Requests\UpdategradeRequest;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['grade'] = grade::get();
        return view('grade.index')->with($data);
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
        DB::beginTransaction();
        try{
            grade::create($request->all());
            return redirect('grade')->with('success', 'Input data kelas berhasil dilakukan!');
        }catch(QueryException $e){
            DB::rollBack();
            return redirect('grade')->with('error', 'Terjadi kesalahan query');
        }
        DB::commit();
        
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
        $grade->update($request->all());

        return redirect('grade')->with('success', 'Success !! The class data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(grade $grade)
    {
        $grade->delete();

        return redirect('grade')->with('success', 'Delete data Kelas berhasil!');
    }
}
