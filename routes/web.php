<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Exports\PeminjamanExport;
use Maatwebsite\Excel\Facades\Excel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [FormController::class, 'index']);
Route::get('/get-karyawan', [FormController::class, 'getKaryawan'])->name('form.getKaryawan');
Route::get('/get-karyawan-data', [FormController::class, 'getKaryawanData']);
Route::get('/get-barang-data', [FormController::class, 'getBarangData']);
Route::post('/peminjaman', [FormController::class, 'peminjaman'])->name('form.peminjaman');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin');
    Route::get('/admin', [AdminController::class, 'dashboardData'])->name('admin');
    Route::get('/filter-by-month', [AdminController::class, 'filterByMonth'])->name('filter-by-month');
    Route::get('/export-peminjaman', function () {
        return Excel::download(new PeminjamanExport, 'peminjaman.xlsx');
    })->name('export-peminjaman');


    Route::get('/admin/karyawan', [AdminController::class, 'karyawan'])->name('admin.karyawan');
    Route::get('/admin/karyawan', [AdminController::class, 'dashboardDataKaryawan'])->name('admin.karyawan');
    Route::post('/import/karyawan', [AdminController::class, 'importKaryawan'])->name('import.karyawan');
    Route::post('/input/karyawan', [AdminController::class, 'create'])->name('karyawan.create');
    Route::get('/admin/edit-karyawan', [AdminController::class, 'editKaryawan'])->name('admin.editKaryawan');
    Route::get('/karyawan/alert-delete', [AdminController::class, 'alertDelete'])->name('admin.alertDelete');
    Route::get('/karyawan/{id}', [AdminController::class, 'show'])->name('karyawan.show');
    Route::post('/update_karyawan', [AdminController::class, 'update'])->name('karyawan.update');
    Route::delete('/delete-karyawan', [AdminController::class, 'delete'])->name('karyawan.delete');
    Route::get('/get-more-karyawan/{skip}', [AdminController::class, 'getMoreKaryawan'])->name('get.more.karyawan');


    Route::get('/admin/barang', [AdminController::class, 'barang'])->name('admin.barang');
    Route::post('/import/barang', [AdminController::class, 'importBarang'])->name('import.barang');
    Route::post('/input/barang', [AdminController::class, 'inputBarang'])->name('input.barang');
    Route::get('/admin/barang', [AdminController::class, 'dashboardDataBarang'])->name('admin.barang');
    Route::post('/update_barang', [AdminController::class, 'updateBarang'])->name('barang.update');
    Route::get('/barang/{id}', [AdminController::class, 'showBarang'])->name('barang.show');
    Route::get('/barang/alert-delete', [AdminController::class, 'alertDeleteBarang'])->name('admin.alertDeleteBarang');
    Route::delete('/delete-barang', [AdminController::class, 'deleteBarang'])->name('barang.delete');
    Route::get('/get-more-barang/{skip}', [AdminController::class, 'getMoreBarang'])->name('get.more.barang');


    Route::get('/admin/license', [AdminController::class, 'license'])->name('admin.license');
    Route::get('/admin/license', [AdminController::class, 'dashboardDataLicense'])->name('admin.license');
    Route::post('/import/license', [AdminController::class, 'importLicense'])->name('import.license');
    Route::post('/input/license', [AdminController::class, 'inputLicense'])->name('input.license');
    Route::get('/admin/edit-license', [AdminController::class, 'editLicense'])->name('admin.editLicense');
    Route::get('/license/alert-delete', [AdminController::class, 'alertDeleteLicense'])->name('admin.alertDelete');
    Route::get('/license/{id}', [AdminController::class, 'showLicense'])->name('license.showLicense');
    Route::post('/update_license', [AdminController::class, 'updateLicense'])->name('license.updateLicense');
    Route::delete('/delete-license', [AdminController::class, 'deleteLicense'])->name('license.deleteLicense');
    Route::get('/get-more-license/{skip}', [AdminController::class, 'getMoreLicense'])->name('get.more.license');





    Route::get('/admin/listAdmin', [AdminController::class, 'admin'])->name('admin.admin');
    Route::post('/list/admin', [AdminController::class, 'listAdmin'])->name('list.admin');


    Route::get('/history', [AdminController::class, 'status'])->name('status');;
    Route::post('/decline-peminjaman/{id}', [AdminController::class, 'decline'])->name('decline-peminjaman');
    Route::post('/approve-peminjaman/{id}', [AdminController::class, 'approve'])->name('approve-peminjaman');
    Route::post('/peminjaman-done/{id}', [AdminController::class, 'done'])->name('peminjaman-done');
    Route::post('/peminjaman-deadline/{id}', [AdminController::class, 'deadline'])->name('peminjaman-deadline');
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
});
