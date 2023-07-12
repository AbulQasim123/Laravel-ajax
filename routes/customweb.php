<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelBoy;
use App\Http\Controllers\AdvanceController;

/* Start Laravel Boy */
Route::controller(LaravelBoy::class)->group(function () {
    Route::get('laravelboy', 'index');
});
/* End Laravel Boy */

/*
    All about laravel queue,job,event,listner,cron job and much more things
*/
Route::controller(AdvanceController::class)->group(function () {
    Route::get('sendmail', 'sendMailUsingQueueJob')->name('advance.topic');
});

