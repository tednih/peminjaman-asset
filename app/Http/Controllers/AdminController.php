<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Admin;
use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Mail\DeclineEmail;
use App\Mail\AcceptEmail;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KaryawanImport;
use App\Imports\BarangImport;
use App\Imports\LicenseImport;
use App\Mail\DeadlineEmail;
use Illuminate\Support\Facades\Hash;
use App\Models\History;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    //admin.dashboard
    public function adminDashboard()
    {
        if (Auth::check()) {
            return view('admin/dashboard/index');
        }
    }


    public function dashboardData(Request $request)
    {
        $peminjaman = Peminjaman::all();

        return view('admin/dashboard/index', compact('peminjaman'));
    }



    public function decline($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $waktuPeminjaman = $peminjaman->waktu_peminjaman;
        $waktuPengembalian = $peminjaman->waktu_pengembalian;


        $peminjaman->status = 0;
        $peminjaman->waktu_peminjaman = $waktuPeminjaman;
        $peminjaman->waktu_pengembalian = $waktuPengembalian;
        $peminjaman->save();

        Mail::to($peminjaman->email)->send(new DeclineEmail($peminjaman));

        return redirect()->back()->with('berhasil_hps', 'Data peminjaman berhasil dihapus.');
    }

    public function approve($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $waktuPeminjaman = $peminjaman->waktu_peminjaman;
        $waktuPengembalian = $peminjaman->waktu_pengembalian;


        $peminjaman->status = 1;
        $peminjaman->waktu_peminjaman = $waktuPeminjaman;
        $peminjaman->waktu_pengembalian = $waktuPengembalian;
        $peminjaman->save();

        $barang = Barang::where('id_barang', $peminjaman->id_barang)->first();
        if ($barang) {
            $barang->tersedia = 0;
            $barang->save();
        }
        Mail::to($peminjaman->email)->send(new AcceptEmail($peminjaman));

        return redirect()->back()->with('berhasil_approve', 'Data peminjaman berhasil diapprove.');
    }

    public function done($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $waktuPeminjaman = $peminjaman->waktu_peminjaman;
        $waktuPengembalian = $peminjaman->waktu_pengembalian;


        $peminjaman->status = 3;
        $peminjaman->waktu_peminjaman = $waktuPeminjaman;
        $peminjaman->waktu_pengembalian = $waktuPengembalian;
        $peminjaman->save();

        $barang = Barang::where('id_barang', $peminjaman->id_barang)->first();
        if ($barang) {
            $barang->tersedia = 1;
            $barang->save();
        }

        return redirect()->back()->with('done', 'Data peminjaman berhasil diselesaikan.');
    }

    public function deadline($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        Mail::to($peminjaman->email)->send(new DeadlineEmail($peminjaman));

        return redirect()->back()->with('deadline', 'Notif Deadline berhasil dikirim.');
    }

    public function status(Request $request)
    {
        $status = $request->input('status');

        $query = Peminjaman::query();

        if ($status != null) {
            $query->where('status', $status);
        }

        $peminjaman = $query->orderBy('created_at', 'desc')->get();

        return view('admin/dashboard/index', compact('peminjaman'));
    }


    public function filterByMonth(Request $request)
    {
        $selectedMonth = $request->input('month');

        $peminjaman = Peminjaman::all();

        // Filter the data based on the selected month
        if (!empty($selectedMonth)) {
            $peminjaman = $peminjaman->filter(function ($pinjam) use ($selectedMonth) {
                $borrowingMonth = Carbon::parse($pinjam->waktu_peminjaman)->format('m');
                return $borrowingMonth === $selectedMonth;
            });
        }

        return view('admin/dashboard/index', compact('peminjaman'));
    }
    //admin.dashboard

    //admin.karyawan
    public function karyawan()
    {
        return view('admin/karyawan/karyawan');
    }

    public function editKaryawan()
    {
        return view('admin/karyawan/edit_tb_karyawan');
    }

    public function alertDelete()
    {
        return view('admin/karyawan/alert_delete_karyawan');
    }
    public function dashboardDataKaryawan(Request $request)
    {
        $karyawan = Karyawan::all();

        return view('admin/karyawan/karyawan', compact('karyawan'));
    }

    public function importKaryawan(Request $request)
    {
        $file = $request->file('file');

        try {
            Excel::import(new KaryawanImport, $file);
            return redirect()->back()->with('success', 'Data karyawan berhasil diimpor.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam mengimpor data karyawan: ' . $e->getMessage());
        }
    }

    public function create(Request $request)
    {
        try {
            Karyawan::create([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'divisi' => $request->divisi,
                'dept' => $request->dept,
                'email' => $request->email,
            ]);
            return redirect()->back()->with('success', 'Data Karyawan berhasil diinput.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menginput data Karyawan.');
        }
    }

    public function show($id)
    {
        // Find the Karyawan by ID
        $karyawan = Karyawan::findOrFail($id);

        // Return the Karyawan data as JSON response
        return response()->json($karyawan);
    }

    public function update(Request $request)
    {
        $id = $request->input('id_karyawan');
        // Find the Karyawan by ID and update the data
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update([
            'nama' => $request->input('nama'),
            'nrp' => $request->input('nrp'),
            'divisi' => $request->input('divisi'),
            'dept' => $request->input('dept'),
            'email' => $request->input('email'),
            // Add more fields as needed
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data updated successfully');
    }


    public function delete(Request $request)
    {
        $idKaryawan = $request->input('id_karyawanDelete');
        // Temukan karyawan berdasarkan ID
        $karyawan = Karyawan::findOrFail($idKaryawan);
        // Hapus karyawan
        $karyawan->delete();

        // Kembalikan pesan sukses dan arahkan kembali ke halaman sebelumnya
        return back()->with('success', 'Karyawan berhasil dihapus.');
    }

    public function getMoreKaryawan($skip)
{
    $karyawan = Karyawan::skip($skip)->take(10)->get();

    return response()->json(['karyawan' => $karyawan]);
}
    
    //admin.karyawan

    //admin.barang
    public function barang()
    {
        return view('admin/barang/barang');
    }

    public function alertDeleteBarang()
    {
        return view('admin/barang/alert_delete_barang');
    }
    public function dashboardDataBarang(Request $request)
    {
        $barang = Barang::all();

        return view('admin/barang/barang', compact('barang'));
    }
    public function importBarang(Request $request)
    {
        $file = $request->file('file');

        try {
            Excel::import(new BarangImport, $file);
            return redirect()->back()->with('success', 'Data Barang berhasil diimpor.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam mengimpor data Barang: ' . $e->getMessage());
        }
    }

    public function inputBarang(Request $request)
    {
        try {
            Barang::create([
                'id_barang' => $request->id_barang,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'tersedia' => 1,
            ]);
            return redirect()->back()->with('success', 'Data Barang berhasil diinput.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menginput data Barang.');
        }
    }

    public function updateBarang(Request $request)
    {
        $id = $request->input('id');

        $barang = Barang::findOrFail($id);
        $barang->update([
            'id_barang' => $request->input('id_barang'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori' => $request->input('kategori'),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function showBarang($id)
    {
        // Find the Karyawan by ID
        $barang = Barang::findOrFail($id);

        // Return the barang data as JSON response
        return response()->json($barang);
    }

    public function deleteBarang(Request $request)
    {
        $id = $request->input('id_barangDelete');
        // Temukan karyawan berdasarkan ID
        $barang = Barang::findOrFail($id);
        // Hapus barang
        $barang->delete();

        // Kembalikan pesan sukses dan arahkan kembali ke halaman sebelumnya
        return back()->with('success', 'Barang berhasil dihapus.');
    }

    public function getMoreBarang($skip)
    {
        $barang = Barang::skip($skip)->take(10)->get();
    
        return response()->json(['barang' => $barang]);
    }
    //admin.barang

    //admin.license
    public function license()
    {
        return view('admin/license/license');
    }

    public function editLicense()
    {
        return view('admin/license/edit_tb_license');
    }

    public function alertDeleteLicense()
    {
        return view('admin/license/alert_delete_license');
    }
    public function dashboardDataLicense(Request $request)
    {
        $license = license::all();

        return view('admin/license/license', compact('license'));
    }

    public function importLicense(Request $request)
    {
        $file = $request->file('file');
        
        try {
            Excel::import(new LicenseImport, $file);
            return redirect()->back()->with('success', 'Data license berhasil diimpor.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam mengimpor data license: ' . $e->getMessage());
        }
    }

    public function inputLicense(Request $request)
    {
        try {
            license::create([
                'nama_license' => $request->nama_license,
                'tgl_expired' => $request->tgl_expired,
            ]);
            return redirect()->back()->with('success', 'Data license berhasil diinput.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menginput data license.');
        }
    }

    public function showLicense($id)
    {
        // Find the license by ID
        $license = license::findOrFail($id);

        // Return the license data as JSON response
        return response()->json($license);
    }

    public function updateLicense(Request $request)
    {
        $id = $request->input('id_license');
        // Find the license by ID and update the data
        $license = License::findOrFail($id);
        $license->update([
            'nama_license' => $request->input('nama_license'),
            'tgl_expired' => $request->input('tgl_expired'),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data updated successfully');
    }


    public function deleteLicense(Request $request)
    {
        $idLicense = $request->input('id_licenseDelete');
        // Temukan license berdasarkan ID
        $license = license::findOrFail($idLicense);
        // Hapus license
        $license->delete();

        // Kembalikan pesan sukses dan arahkan kembali ke halaman sebelumnya
        return back()->with('success', 'License berhasil dihapus.');
    }

    public function getMorelicense($skip)
    {
        $license = license::skip($skip)->take(10)->get();

        return response()->json(['license' => $license]);
    }
    
    //admin.license

    //admin.admin
    public function admin()
    {
        return view('admin/listAdmin/listAdmin');
    }
    public function listAdmin(Request $request)
    {
        $admin = new Admin([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $admin->save();

        return redirect()->back()->with('success', 'Data Admin berhasil diinput.');
    }

    //admin.admin

}
