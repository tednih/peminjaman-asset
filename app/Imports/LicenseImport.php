<?php

namespace App\Imports;

use PhpOffice\PhpSpreadsheet\Shared\Date;
use App\Models\License;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades;
use Illuminate\Console\Scheduling\Schedule;
// use Binarcode\LaravelMailator\Scheduler;
// use Binarcode\LaravelMailator\Tests\Fixtures\InvoiceReminderMailable;

class licenseImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        $parsedDate = Date::excelToDateTimeObject($row['tgl_expired'])
        ->format('Ymd'); 

        try{
            return new License([
                'nama_license' => $row['nama_license'],
                'tgl_expired' => $parsedDate,
            ]);
        }catch(\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menginput data license.');

        };
        
        

    }
}
