<?php

namespace App\Console;

use App\Models\Stock;
use App\Models\Requests;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    // protected function schedule(Schedule $schedule)
    // {
    //     // $schedule->command('inspire')->hourly();
    // }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }


    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // The code for checking pending requests and updating request status goes here
            // Set the interval time (in seconds) for checking pending requests
            $interval = 60; // Check every minute

            while (true) {
                // Get all pending requests
                $pendingRequests = Requests::where('status', 'pending')->get();

                foreach ($pendingRequests as $request) {
                    $productId = $request->products_id;
                    $requestedQuantity = $request->quantity;

                    // Check if the stock quantity for the product has been updated
                    $stockQuantity = Stock::where('name', $productId)->first()->quantity;
                    if ($requestedQuantity <= $stockQuantity) {
                        // Update the request status to accepted
                        $request->status = 'Accepted';
                        $request->save();

                        // Send notification or perform other actions as needed
                    }
                }

                // Wait for the specified interval before checking again
                sleep($interval);
                // usleep($interval * 1000000);
            }
        })->everyMinute();
    }
}