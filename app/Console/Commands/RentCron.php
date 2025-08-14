<?php

namespace App\Console\Commands;

use App\Enums\BookingStatus;
use App\Enums\RentStatus;
use App\Models\Booking;
use App\Models\ItemNumber;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Command\Command as CommandAlias;

class RentCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rent:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        //php artisan schedule:run


        return CommandAlias::SUCCESS;
    }
}
