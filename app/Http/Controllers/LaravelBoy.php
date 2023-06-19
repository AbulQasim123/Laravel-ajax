<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\LaravelBoyRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\Crud;
use Illuminate\Support\Facades\Storage;

class LaravelBoy extends Controller
{
    public function index(Request $request){
        /* All About response() */
        // return response('Hello world')->header('userName','Qasim')->header('Country','India');
        // return response('Hello world')->withHeaders([
        //     'Username' => 'Qasim',
        //     'Country' => 'India',
        // ]);
        // $cooie = cookie('name','Qasim');
        // Cookie::expire('name');
        // return response('Hello world')->cookie($cooie);

        // return response()->view('welcome',headers:['Name'=>'Qasim']);
        // return response()->json([
        //     'userName' => 'Qasim',
        //     'userCountry' => 'India',
        // ]);

        // return response()->file(public_path('loader/loader.gif'));
        // return response()->download(public_path('loader/loader.gif'));
        // return response()->streamDownload(function(){
        //     echo "Hello world";
        // },'test.text');
        
        /* 
            This is woking from AppServiceProvider.php 
            written method formatName here
        */
        // $data = [
        //     ['userName' => 'qasim'],
        //     ['userName' => 'india'],
        //     ['userName' => 'bhiwandi'],
        // ];

        // return response()->formatNamt($data);
        // return response()->json(timezone_identifiers_list());
        // return "ok";

        /* laravel Advance rate Limiting How to control traffic and improve performance */

        // RateLimiter::clear('online-users');
        // dd(RateLimiter::availableIn('online-users'));
        // RateLimiter::attempt(
        //     'online-users',
        //     5,
        //     function(){
        //         $onlineUsers = [
        //             'Abul',
        //             'Qasim',
        //         ];
        //         Cache::put('firebase:online',$onlineUsers);
        //     }
        // );
        // return Cache::get('firebase:online');

        /* Laravel helper, All About Arr helper */

        // $user = [
        //     'name' => 'Qasim',
        //     'age' => 26,
        //     'meta' => [
        //         'address' => 'Fake address 1',
        //         'sport' => 'Cricket',
        //         'fake' => [
        //             'phone' => '9785748540'
        //         ]
        //     ]
        // ];
        // $result = $user['language'];
        // $result = Arr::get($user,'language','en');
        // $result = Arr::get($user,'meta.sport');
        // $result = Arr::set($user,'meta.sport','Football');
        // $result = Arr::get($user,'meta.sport');
        // $result = Arr::first($user);
        // $result = Arr::query($user);
        // $result = Arr::hasAny($user,'age');
        // $result = Arr::dot($user);
        // dd($result);

        /* Laravel Advance Eloquent Control Attribute Visibility */

        // $posts = Crud::get();
        // $role = 'admin';
        // $posts->makeVisible('firstname');

        // $role = 'user';
        // $selectOnly = $role == 'admin' ? ['*'] : ['firstname','lastname'];
        // $posts = Crud::select($selectOnly)->get();
        // return response()->json(compact('posts'));
        
        // $posts = Crud::get();
        // $posts->setHidden(['firstname','image']);
        // return response()->json(compact('posts'));

        /* 
            Laravel Advance Eloquent | Perform complex queries on json columns
            
            if the data saved in the table column JSON format 
            like eg:)
            First column  =  ["reading","writing"];  
            Second column =  ["reading"];

                // we can retrive following this way
                // where data is table column name
            return Crud::whereJsonContains('data','writing')->get();
            return Crud::whereJsonContains('data','reading')->get();
            Crud::whereJsonLength('data','>',1)->get();


            like eg:)
            First column = 
            {
                "info":{
                    "hobbies":[
                        "reading",
                        "writing",
                    ]
                },
                "sport":"football"
            }
            Second column = 
            {
                "info":{
                    "hobbies":[
                        "reading",
                    ]
                },
                "sport":"BasketBall"
            }
                // we can retrive following this way
                // where data is table column name
            return Crud::whereJsonContains('data->info->hobbies','reading')->get();
            return Crud::whereJsonContains('data->info->hobbies','writing')->get();
            return Crud::whereJsonContains('data->info->hobbies',['writing'])->get();
            return Crud::whereJsonContains('data->info->hobbies',['writing','reading'])->get();
            return Crud::whereJsonContains('data->info->hobbies',['reading'])->get();
            return Crud::whereJsonContains('data->sport->',['BasketBall'])->get();
            return Crud::whereJsonContains('data->sport->','BasketBall')->get();

            return Crud::update(['data->sport'=> 'BasketBall'])->get();
            return Crud::update(['data->info->hobbies'=> ['Riding Horsek']])->get();
            return Crud::find(2)->data;
            return json_decode(Crud::find(2)->data)
            return json_decode(Crud::find(2)->data,true)
            
        */

        /* Don't use env() directly with reason */

        // $env_values = env('APP_KEYS');
        // return response()->json(compact('env_values'));
        
        // $env_values = config('services.laravel_boy.key');
        // return response()->json(compact('env_values'));

        /* Learn storage by creating a simple file explorer simulator */

            // Create a new folder
        // return Storage::makeDirectory('laravel-boy');
            // store file inside this folder
        // $file = $request->file('avatar');
        // return Storage::putFile('laravel-boy', $file);

        // $file = $request->file('avatar');
        // $name = 'Qasim.'.$file->extension();
        // return Storage::putFileAs('laravel-boy', $file, $name);
            // copy a file to another directory
        // return Storage::copy('laravel-boy/Qasim.jpg','public/Qasim.jpg');
            // cut a file to another directory
        // return Storage::move('laravel-boy/Qasim.jpg','public/Qasim.jpg');
            
            // list file or sub file
        // $files = Storage::files('public');
        // dd($files);
        // $files = Storage::allFiles('public');
        // dd($files);
            // show a file
        // $files = Storage::get('public/Qasim.jpg');
        // return Storage::put('laravel-boy/test.jpg', $files);
            // download a file
        // return Storage::download('laravel-boy/test.jpg');
            // delete a file
        // return Storage::delete('laravel-boy/test.jpg');
        // if (Storage::exists('laravel-boy/test.jpg')) {
        //     return Storage::delete('laravel-boy/test.jpg');
        // }
        // return "no file found";
            // delete a folder
        return Storage::deleteDirectory('laravel-boy');

        

        
    }
}
