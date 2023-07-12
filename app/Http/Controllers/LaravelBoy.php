<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use App\Models\AddUser;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class LaravelBoy extends Controller
{
    public function index(Request $request)
    {
        /* All About response() */
        // return response('Hello world')->header('userName','Qasim')->header('Country','India');

        // return $result;
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
        // return Storage::deleteDirectory('laravel-boy');

        /*
            Laravel advance query | implementation any scoreboard in clean and short way.
        */

        // Sql Raw query
        // "Select name, score
        // DENSE_RAND() OVER(ORDER BY score DESC) as position
        // from students ORDER BY score desc";

        // Laravel Raw query
        // $students = Student::selectRaw('name,score, DENSE_RAND() OVER(ORDER BY score DESC) as position')->orderBy('score','desc')->get();

        /*
            Laravel Collection | Take care about this logical error.
        */
        // $emptyArray = []; //false;
        // $emptyCollection = collect([]);

        // if (!$emptyArray) {
        //     return "Array is empty";
        // }

        // if(!$emptyCollection->count()){
        //     return "Array is empty";
        // }

        // if(!$emptyCollection->isNotEmpty()){
        //     return "Array is empty";
        // }

        // if($emptyCollection->empty()){
        //     return "Array is empty";
        // }

        // if($emptyCollection->isEmpty()){
        //     return "Array is empty";
        // }else{
        //     return "Done";
        // }

        /* Laravel validation | Clean and professional way to validate password */
        // This code is written validationRequestFile for password field
        // public function rules(){
        //     return [
        //         'password' => [Password::min(5)->letters()->mixedCase()->symbols()]
        //     ];
        // }

        /* Laravel tip | download or show file in response */
        // $path = Storage::path('public/Qasim.jpg');tommarow
        // dd($path);
        // return response()->file($path);
        // return response()->download($path,'Laravel_boy_image');

        /* Laravel Advance tip | create custom helper method for fast development */
        // return dd(now());
        /*
            This function are define custom helper.php file. tomorrow(), isLoggedIn()
        */
        // return dd(tomorrow());
        // return dd(isLoggedIn());

        /* Laravel tip | How to use whenFilled method instead of if() */
        // $user = null;
        // if ($request->filled('name')) {
        //     $user = ucfirst($request->name);
        // }

        // $user = $request->filled('name') ? ucfirst($request->name) : null;
        // $user = $request->whenFilled('name', function($val){
        //     return ucfirst($val);
        // }, function(){
        //     return null;
        // });

        // $user = $request->whenFilled('name', fn($val)=>ucfirst($val), fn()=>null);
        // dd($user);

        // $name = 'qasim';
        // $ucFirst = mb_strtoupper(mb_substr($name, 0, 1));
        // dd($ucFirst);

        /* Laravel tip | Fatest way to send email on your local server */
        // Mail::to('qasim.cloudzurf@gmail.com')->send(new TestMail(12345));
        // return 'sent';

        /* Laravel Advance tip | Custom Order */
        // $users = Post::orderByRaw("FIELD('role','super admin','admin','editor')")->get(['role']);
        // $users = Post::orderByRaw("FIELD('status',1,2,0)")->get(['status']);
        // return $users;

        // dd($request->str('name')->headline()->finish('.')->value());



            /* All About Cache */

        // $user = AddUser::all();
        // Cache::put('user', $user, now()->addMinute(1));
        // dd(Cache::get('user'));
        // $user = AddUser::all();
        // $jsonData = json_encode($user);
        // Cache::put('user', $jsonData, now()->addMinute(1));
        // dd(json_decode(Cache::get('user')));

        // Cache::forever('product','Laptop');
        // if(Cache::has('product')){
        //     dd(Cache::get('product'));
        // }else{
        //     dd(null);
        // }
        // $product = Cache::get('product');
        // $quantity = Cache::get('quantity',201);
        // $carts = Cache::get('carts', function(){
        //     return 2;
        // });
        // $data = ['product' => $product, 'quantity' => $quantity,'carts' => $carts];
        // return  json_encode($data);


        /***********  Cache Facade ***************/
        // Cache::remember('desk', now()->addMinute(5), function () {
        //    return 'Desktop';
        // });
        // // dd(Cache::get('desk'));
        // $product = Cache::get('desk');
        // $quantity = Cache::get('quantity',201);
        // $data = ['product' => $product, 'quantity' => $quantity];
        // return  json_encode($data);

        // Cache::add('mobile',['Apple','Sumsung'], now()->addMinute(1));
        // // dd(Cache::get('mobile'));
        // $product = Cache::get('mobile');
        // $quantity = Cache::get('quantity',201);
        // $data = ['product' => $product, 'quantity' => $quantity];
        // return  json_encode($data);


        // Remove Cache Item
        // if(Cache::has('product')){
        //     Cache::forget('product');
        //     dd('deleted');
        // }
        // Cache::forget('product');
        // Cache::put('product', 'Laptop', 0);
        // Cache::put('product', 'Laptop', -5);

        // Clear Cache
        // Cache::flush();

        // Retrieving and Store item
        // $value = Cache::rememberForever('shirt', function(){
        //     return 10;
        // });
        // dd($value);

        // Retrieving and Delete item
        // Cache::pull('product');

    }
}
