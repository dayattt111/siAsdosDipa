<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \Illuminate\Database\Console\Migrations\MigrateCommand::class,
        \Illuminate\Database\Console\Migrations\MigrationMakeCommand::class,
        \Illuminate\Database\Console\Migrations\RefreshCommand::class,
        \Illuminate\Database\Console\Migrations\ResetCommand::class,
        \Illuminate\Database\Console\Migrations\RollbackCommand::class,
        \Illuminate\Database\Console\Migrations\StatusCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        if (is_file(base_path('routes/console.php'))) {
            require base_path('routes/console.php');
        }
    }
}

