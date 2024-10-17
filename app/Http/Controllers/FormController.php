<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Peminjaman;

use Illuminate\Support\Facades\Mail;

use App\Mail\WelcomeEmail;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //barang
    public function index(Request $request)
    {
        $barang = Barang::all();
        $karyawan = Karyawan::all();
		$peminjaman = Peminjaman::all();

        return view('welcome', compact('barang', 'karyawan', 'peminjaman'));
    }

    // KaryawanController.php
    public function getKaryawan(Request $request)
    {
        $name = $request->input('name');

        $karyawan = Karyawan::where('nama', 'LIKE', "%$name%")->pluck('nama');

        return response()->json($karyawan);
    }

    public function getKaryawanData(Request $request)
    {
        $name = $request->input('name');

        $karyawan = Karyawan::where('nama', $name)->first();

        if ($karyawan) {
            $data = [
                'id_karyawan' => $karyawan->id_karyawan,
                'nrp' => $karyawan->nrp,
                'divisi' => $karyawan->divisi,
                'email' => $karyawan->email
            ];
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Karyawan not found.']);
        }
    }

    // public function getBarangData(Request $request)
    // {
    //     $barang = $request->input('barang');

    //     $barang = Barang::where('deskripsi', $barang)->first();

    //     if ($barang) {
    //         $data = [
    //             'id' => $barang->id_barang,
    //             'deskripsi' => $barang->deskripsi,
    //             'kategori' => $barang->kategori,
    //             'tersedia' => $barang->tersedia,
    //         ];
    //         return response()->json($data);
    //     } else {
    //         return response()->json(['error' => 'Barang not found.']);
    //     }
    // }


    public function peminjaman(Request $request)
    {

        try {
            // Simpan data ke dalam tabel
            $peminjaman = Peminjaman::create([
                'id_barang' => $request->id_barang,
                'id_karyawan' => $request->id_karyawan,
                'nama' => $request->name,
                'nrp' => $request->nrp,
                'divisi' => $request->divisi,
                'email' => $request->email,
                'jenis_barang' => $request->barang,
                'waktu_peminjaman' => $request->wkt_pinjam,
                'waktu_pengembalian' => $request->wkt_kembali,
                'status' => 2,

            ]);

            Mail::to($request['email'])->send(new WelcomeEmail($peminjaman));

            return redirect()->back()->with('success', 'Data peminjaman berhasil dikirim. Silahkan cek Email anda');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim data peminjaman. Silakan coba lagi.');
        }
    }
}
