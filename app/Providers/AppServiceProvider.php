<?php

namespace App\Providers;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();
        Response::macro('formatNamt', function(array $data){
            $data = collect($data)->transform(function($value){
                $value['userName'] = ucfirst($value['userName']);
                return $value;
            });
            return Response::make($data);
        });
    }
}
