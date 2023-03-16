<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use App\Models\grade;
use App\Models\spp;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['siswa'] = siswa::select('grade.nama_kelas', 'spp.tahun', 'siswa.*')->leftJoin
        ('grade', 'grade.id', 'siswa.id_kelas')->leftJoin('spp', 'spp.id', 'siswa.id_spp')->get();
        // $data['siswa'] = siswa::get();
        $data['grade'] = grade::get();
        $data['spp'] = spp::get();
        return view('siswa.index')->with($data);
    }

    
    public function store(StoresiswaRequest $request)
    {
        // dd($request);
        //siswa::create($request->all());


        // DB::beginTransaction();
        // try{
        //     siswa::create($request->all());
            $siswa=siswa::create($request->all());

            //input username dan password ke tabel user
            $data['name'] = $siswa->nama;
            $data['username'] = $siswa->nisn;
            $data['password'] = bcrypt($siswa->nis);
            $data['level'] = 3;
            $data['id_person'] = $siswa->id;
            User::create($data);

            return redirect('siswa')->with('success', 'Input data siswa berhasil!');
        // }catch(QueryException $e){
        //     DB::rollBack();
        //     return redirect('spp')->with('error', 'Terjadi Kesalahan query');
        // }
        // DB::commit();
    }

    public function show(siswa $siswa)
    {
        //
    }

    public function edit(siswa $siswa)
    {
        //
    }

    public function update(UpdatesiswaRequest $request, siswa $siswa)
    {
        $siswa->update($request->all());

        return redirect('siswa')->with('success', 'Success !! The student data has been updated');
    }

   
    public function destroy(siswa $siswa)
    {
        $siswa->delete();

        return redirect('siswa')->with('success', 'Delete student information correctly finished!');
    }

    public function export() 
    {
        $date = date('Y-m-d');
        return Excel::download(new SiswaExport, $date.'_siswa.xlsx');
    }

    public function importData(){
        Excel::import(new SiswaImport, request()->file('import'));

        return redirect('siswa')->with('success', 'Import data Siswa berhasil!');
    }
}
