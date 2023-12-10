<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showBeranda()
    {

        $income = DB::table('kendaraan')->where('status', 'keluar')->sum('biayaparkir');
        $jumlahKendaraan = DB::table('kendaraan')->where('status', 'masuk  ')->count();

        return view('beranda', [
            'jumlahKendaraan' => $jumlahKendaraan,
            'income' => $income,
        ]);
    }

    public function showUsers()
    {
        $userDataAll = DB::table('users')->get();
        $userPTC = DB::table('users')->where('idmall', 1)->get();
        $userTP = DB::table('users')->where('idmall', 2)->get();
        $userRoyal = DB::table('users')->where('idmall', 3)->get();

        return view('users', [
            'userAll' => $userDataAll,
            'userPTC' => $userPTC,
            'userTP' => $userTP,
            'userRoyal' => $userRoyal
        ]);
    }


    public function showTambahPegawai()
    {
        return view('tambahpegawai');
    }

    public function showEditPegawai($id)
    {
        $data = DB::table('users')->where('id', $id)->get();
        $name = DB::table('users')->where('id', $id)->value('name');
        return view('editpegawai', ['data' => $data, 'nama' => $name]);
    }
}