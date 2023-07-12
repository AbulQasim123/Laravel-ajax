<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is for CronJob Test';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = array('data' => 'This Command is for CronJob Test');
        Mail::send('email.cronjob', $data, function ($message) {
            $message->to('qasim.cloudzurf@gmail.com');
            $message->subject('CronJob Testing Mail Example');
        });
    }
}
