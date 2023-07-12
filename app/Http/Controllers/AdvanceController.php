<?php

namespace App\Http\Controllers;

use App\Jobs\AdvanceJob;
use Illuminate\Http\Request;

class AdvanceController extends Controller
{   
    // Working on Job & Queue
    public function sendMailUsingQueueJob(){
        $userMail = 'qasim.cloudzurf@gmail.com';
        dispatch(new AdvanceJob($userMail));
        dd('Mail Sent Successfully...');
    }

}
