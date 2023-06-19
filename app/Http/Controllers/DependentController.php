<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Student;
use App\Models\Image;
use App\Models\User;
use App\Models\DownloadImage;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Validator;

class DependentController extends Controller
{
    public function Country()
    {
        $response = Http::withHeaders([
            'api-token' => 'da7wSFRUI-x85RpAnD73vkn96sFwan3X2D5dDhUF996yjmecQnMFrvZKYn4BNidx5mI',
            'user-email' => 'abulqasimansari842@gmail.com'
        ])->get('https://www.universal-tutorial.com/api/getaccesstoken');
        $data = (array)json_decode($response->body());
        $auth_token = $data['auth_token'];
        // echo $auth_token;

        $countryresponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $auth_token,
        ])->get('https://www.universal-tutorial.com/api/countries/');
        $countries = (array)json_decode($countryresponse->body());
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die;
        // dd($countries);
        // die;
        return view(
            'ajax.dependent',
            [
                'token' => $auth_token,
                'countries' => $countries,
                'students' => Student::latest()->get(),
                'categories' => DB::table('categories')->get(),
                'products' => DB::table('products')->get(),
                'showcheckboxs' => DB::table('checkbox_table')->get(),
                'downloadimages' => DownloadImage::all(),
                'totalcount' => DownloadImage::sum('count'),
            ]
        );
    }

    public function GetStates(Request $request)
    {
        $stateresponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $request->token,
        ])->get('https://www.universal-tutorial.com/api/states/' . $request->country);
        $states = $stateresponse->body();
        return $states;
    }

    public function GetCities(Request $request)
    {
        $cityresponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $request->token,
        ])->get('https://www.universal-tutorial.com/api/cities/' . $request->state);
        $cities = $cityresponse->body();
        return $cities;
    }

    // Delete Multiple record with checkbox in laravel
    public function DeleteData(Request $request)
    {
        $ids = $request->ids;
        Student::whereIn('id', $ids)->delete();
        return redirect()->back();
    }
    //  Delete Multiple record with checkbox by ajax method in laravel
    public function DeletewithAjax(Request $request)
    {
        if (isset($request->del_id)) {
            Student::whereIn('id', $request->del_id)->delete();
            return response()->json(['success' => true, 'msg' => 'Data delete successfully', 'del_id' => $request->del_id]);
        }
        return response()->json(['success' => false, 'msg' => 'Please Tick at least on checkbox']);
    }
    // Upload multiple image and save database
    public function UploadImage(Request $request)
    {
        $request->validate([
            'images' => 'required'
        ]);
        $images = [];
        foreach ($request->file('images') as $image) {
            $imagename = $image->getClientOriginalName();
            $image->move(public_path() . '/images/', $imagename);
            $images[] = $imagename;
        }
        $images = json_encode($images);
        Image::create(['images' => $images]);
        return redirect()->back()->with('suc-img', 'Upload successfully');
    }
    // skip and take method in laravel
    public function fetchdatafromdatabase()
    {
        $data = Student::skip(1)->take(2)->get();
        dd($data);
    }

    // Route Accept Get and Post Method
    // How to set custom variable in .env file
    // XSS (Cross-Site-Scripting) Protection in laravel
    public function Login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('ajax.login');
        }
        if ($request->isMethod('POST')) {
            // echo "post in ";
            dd($request->all());
        }
    }
    // Autocomplete
    public function Autocomplete(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::where('firstname', 'LIKE', $request->value . '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output .= '<ul class="list-group" style="display:block; position:relative; z-index: 1">';
                foreach ($data as $row) {
                    $output .= '<li class="list-group-item list_item">' . $row->firstname . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item">No Data Found</li>';
            }
            return $output;
        }
    }
    // Ajax Multiple searching from database
    public function FilterData(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::where('firstname', 'LIKE', '%' . $request->filter . '%')
                ->orWhere('lastname', 'LIKE', '%' . $request->filter . '%')
                ->orWhere('email', 'LIKE', '%' . $request->filter . '%')
                ->orWhere('phone', 'LIKE', '%' . $request->filter . '%')
                ->get();
            return response()->json(['data' => $data]);
        }
    }

    // How to Filter data using select box with Ajax
    public function FilterSelectData(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('products')->where(['category_id' => $request->selectfilter])->get();
            return response()->json(['data' => $data]);
        }
    }
    // How to upload file into database using Ajax
    public function UploadImageStore(Request $request)
    {
        $request->validate([
            'upload_image' => 'required|mimes:jpg,png,gif,jpeg|max:2048',
        ]);
        $imgname = rand() . '.' . $request->upload_image->extension();
        $request->upload_image->move(public_path('images'), $imgname);
        Image::create(['images' => $imgname]);
        return response()->json(['success' => 'File uploaded successfully', 'class_name' => 'text-success']);
    }
    // Laravel Drag and drop image uploade
    public function DragandDrop(Request $request)
    {
        $image = $request->file('file');
        $image_name = time() . $image->getClientOriginalName() . '.' . $image->extension();
        $image->move(public_path('images'), $image_name);
        return response()->json(['success' => $image_name]);
    }

    public function DataTable(Request $request)
    {
        if ($request->ajax()) {
            $user = User::latest()->get();
            return DataTables::of($user)
                ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $btn = '<button class="btn btn-primary btn-sm view">View</button>';
                //     return $btn;
                // })
                // ->rawColumns(['action'])
                ->make(true);
        }
    }

    // How to fetch data from api and save data into database
    public function FetchApiSaveDatabase()
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts");
        $data = json_decode($response->body());
        foreach ($data as $row) {
            $row = (array)$row;
            $exitsid = DB::table('api_table')->where('id', $row['id'])->first();
            if (!$exitsid) {
                DB::table('api_table')->updateOrInsert(
                    [
                        'id' => $row['id'],
                        'user_id' => $row['userId'],
                        'title' => $row['title'],
                        'body' => $row['body'],
                    ]
                );
            } else {
                dd("Data Already exist");
            }
        }
        dd("Fetched Data from Api and save done.");
    }

    // Ajax form validation in laravel
    public function FormVaidation(Request $request)
    {
        // $rules = [
        //     'username' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ];
        // $message = [
        //     'username.required' => 'Username is Required?',
        //     'email.required' => 'Email is Required?',
        //     'email.email' => 'Please enter valid email',
        //     'password.required' => 'Password is Required?',
        // ];
        // $validator = Validator::make($request->all(), $rules, $message);
        // if($validator->fails()){
        //     return response()->json(['error'=>$validator->errors()]);
        // }

        $validator = Validator::make($request->all(),
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username is Required?',
                'email.required' => 'Email is Required?',
                'email.email' => 'Please enter valid email',
                'password.required' => 'Password is Required?',
            ]);
        if ($validator->passes()) {
            // Code goes here
            return response()->json(['success'=>'Added new Record']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }


    // How to store multiple select value
    public function MultiSelect(Request $request)
    {
        $request->validate([
            'enter_name' => 'required',
            'hobey' => 'required',
        ]);
        $data = array(
            'name' => $request->enter_name,
            'hobey' => implode(",", $request->hobey)
        );
        DB::table('hobey_table')->insert($data);
        return redirect()->back();
    }

    // How to store multiple checkbox value
    public function MultiCheckbox(Request $request)
    {
        $request->validate([
            'checkbox_name' => 'required',
            'language' => 'required',
        ]);
        $data = array(
            'name' => $request->checkbox_name,
            'language' => json_encode($request->language),
        );
        DB::table('checkbox_table')->insert($data);
        return redirect()->back();
    }

    // Increment and show count of download images
    public function DownloadImage(Request $request)
    {
        $image = DownloadImage::find($request->imgid);
        $image->count = $image->count + 1;
        $image->save();
        $imgcount = $image->count;
        $totalcount = DownloadImage::sum('count');

        return response()->json(['imgcount' => $imgcount, 'totalcount' => $totalcount]);
    }
}
