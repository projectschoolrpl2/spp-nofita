<?php

namespace App\Http\Controllers;

// use App\Models\grade;
// use App\Models\officer;
use App\Models\pembayaran;
use App\Models\DetailPembayaran;
use App\Models\officer;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index(){
        // $pembayaran = DB::table('pembayaran')->join('detail_pembayaran', 'pembayaran.id', '=', 'detail_pembayaran.id_pembayaran')->select('pembayaran.*', 'detail_pembayaran.*')->get();

        // $data['detail_pembayaran'] = DetailPembayaran::select('pembayaran.*','detail_pembayaran.*', 'officer.nama_petugas')->leftJoin
        // ('pembayaran', 'pembayaran.id', 'detail_pembayaran.id_pembayaran')->leftJoin('officer', 'officer.id', 'pembayaran.id_petugas')
        // ->get();
        // $data['pembayaran'] = pembayaran::get();
        // $data['officer'] = officer::get();

        $result = DB::table('detail_pembayaran')
            ->select('pembayaran.*', 'detail_pembayaran.*', 'officer.nama_petugas', 'spp.tahun', 'spp.nominal', 'siswa.nisn')
            ->leftJoin('pembayaran', 'pembayaran.id', 'detail_pembayaran.id_pembayaran')
            ->leftJoin('officer', 'officer.id', 'pembayaran.id_petugas')
            ->leftJoin('spp', 'spp.id', 'detail_pembayaran.id_spp')
            ->leftJoin('siswa', 'siswa.id', 'pembayaran.id_siswa')
            ->get();
        $data['result'] = $result;
        // $data['officer'] = officer::get();
        return view('history.index')->with($data);
    }
}
