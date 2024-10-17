<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\License;
use App\Mail\LicenseExpirationReminder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $licenses = License::all();

        foreach ($licenses as $license) {
            $dateExpired = Carbon::parse($license->tgl_expired)->startOfDay();
            $dateMinus14Days = $dateExpired->copy()->subDays(14)->toDateString();
            $dateMinus30Days = $dateExpired->copy()->subDays(30)->toDateString();
            $dateMinus60Days = $dateExpired->copy()->subDays(60)->toDateString();

            // Schedule for $dateExpired
            $schedule->call(function () use ($license) {
                Mail::to(['riza.adithya@binapertiwi.co.id', 'yusuf.isnaini@binapertiwi.co.id'])->send(new LicenseExpirationReminder($license));
            })->dailyAt('10:00')->when(function () use ($dateExpired) {
                return Carbon::now()->startOfDay()->equalTo($dateExpired);
            });

            Log::info($dateExpired);

            // Schedule for $dateMinus14Days
            $schedule->call(function () use ($license) {
                Mail::to(['riza.adithya@binapertiwi.co.id', 'yusuf.isnaini@binapertiwi.co.id'])->send(new LicenseExpirationReminder($license));
            })->dailyAt('10:00')->when(function () use ($dateMinus14Days) {
                return Carbon::now()->startOfDay()->equalTo($dateMinus14Days);
            });

            // Schedule for $dateMinus30Days
            $schedule->call(function () use ($license) {
                Mail::to(['riza.adithya@binapertiwi.co.id', 'yusuf.isnaini@binapertiwi.co.id'])->send(new LicenseExpirationReminder($license));
            })->dailyAt('10:00')->when(function () use ($dateMinus30Days) {
                return Carbon::now()->startOfDay()->equalTo($dateMinus30Days);
            });

            // Schedule for $dateMinus60Days
            $schedule->call(function () use ($license) {
                Mail::to(['riza.adithya@binapertiwi.co.id', 'yusuf.isnaini@binapertiwi.co.id'])->send(new LicenseExpirationReminder($license));
            })->dailyAt('10:00')->when(function () use ($dateMinus60Days) {
                return Carbon::now()->startOfDay()->equalTo($dateMinus60Days);
            });
            }
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
