<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function tambahPegawai(Request $request)
    {
        $password = bcrypt($request->password);
        DB::table('users')->insert([
            'username' => $request->username,
            'password' => $password,
            'name' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->nomor,
            'role' => $request->role,
            'idmall' => $request->idmall
        ]);
        return redirect('users')->with('success', 'User berhasil ditambahkan');
    }

    public function editPegawai(Request $request)
    {
        $password = bcrypt($request->password);
        DB::table('users')->where('id', $request->id)->update([
            'username' => $request->username,
            'password' => $password,
            'name' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->nomor,
            'role' => $request->role,
            'idmall' => $request->idmall
        ]);
        return redirect('users')->with('success', 'User berhasil diupdate');
    }

    public function hapusPegawai($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('users')->with('success', 'User berhasil dihapus');
    }
}