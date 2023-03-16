<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Http\Requests\StorepembayaranRequest;
use App\Http\Requests\UpdatepembayaranRequest;
use App\Models\DetailPembayaran;
use App\Models\grade;
use App\Models\siswa;
use App\Models\spp;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo 'Ini halaman pembayaran';
        $data['siswa'] = siswa::select('grade.nama_kelas', 'spp.tahun', 'siswa.*')->leftJoin
        ('grade', 'grade.id', 'siswa.id_kelas')->leftJoin('spp', 'spp.id', 'siswa.id_spp')->get();
        $data['grade'] = grade::get();
        $data['spp'] = spp::orderByDesc('tahun')->get();
        return view('pembayaran.index')->with($data);
    }

    // public function form(){
        
    //     return view('pembayaran.form', $data);
    // }

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
     * @param  \App\Http\Requests\StorepembayaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepembayaranRequest $request)
    {
        // return $request->item;
        $data['id_petugas']=auth()->user()->id;
        $data['id_siswa'] = $request['id_siswa']; 
        $data['tgl_bayar'] = $request['tgl_bayar'];
        $input_pembayaran = pembayaran::create($data);

        //input detail pembayaran
        foreach($request->item as $item){
            $data2['id_pembayaran'] = $input_pembayaran->id; 
            // $data2['tahun_bayar'] = $item['tahun_bayar']; 
            $data2['bulan_bayar'] = $item['bulan_bayar']; 
            $data2['id_spp'] = $item['id_spp']; 
            DetailPembayaran::create($data2);
        }
        

        return redirect('history')->with('success', 'Input Transaksi Pembayaran berhasil dilakukan!');
        // $data['nisn']=$request['nisn'];
        
        // $data['tgl_bayar']=date('Y-m-d');

        // $input_pembayaran = pembayaran::create($data);
        // return redirect('pembayaran')->with('success', 'Input berhasil!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepembayaranRequest  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepembayaranRequest $request, pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }

}
