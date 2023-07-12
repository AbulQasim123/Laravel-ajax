<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CronSendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Mail to the All User By Cron Job';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Send email All User
        // $userEmail = User::select('email')->get();
        // $emails = [];
        // foreach ($userEmail as $email) {
        //     $emails = $email['email'];
        // }
        // Mail::send('email.sendmailallusers',[], function($message) use ($emails){
        //     $message->to($emails);
        //     $message->subject('This is Testing Email for All Users At one Time');
        // });

        // Send Mail BCC Limited Users

        // $userEmails = User::whereIn('id', [1, 2, 3])->pluck('email')->toArray();
        // Mail::send('email.sendmailallusers', [], function ($message) use ($userEmails) {
        //     $message->bcc($userEmails);
        //     // $message->to($userEmails);
        //     $message->subject('This is Testing Email for All Users At One Time');
        // });
        
        // Send Email Limited users at one time
        $userIds = [1, 2, 3];
        foreach ($userIds as $userId) {
            $user = User::find($userId);
            $email = $user->email;
            
            Mail::send('email.sendmailallusers', [], function($message) use ($email) {
                $message->to($email);
                $message->subject('This is Testing Email for a Single User');
            });
        }
    }
}
