<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Models\UsersOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{
    public function index()
    {
        // $data = Http::get('https://api.countrystatecity.in/v1/countries');
        // dd($data);
        // $data = json_decode($data);
        return view('ajax.students');
    }

    public function FetchData(Request $req)
    {
        if ($req->ajax()) {
            $data = Student::orderBy('id', 'asc')->get();
            echo json_encode($data);
        }
    }

    public function AddStudents(Request $req)
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
        ];
        $error = Validator::make($req->all(), $rules);
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = [
            'firstname' => $req->firstname,
            'lastname' => $req->lastname,
            'email' => $req->email,
            'phone' => $req->phone,
        ];

        Student::create($form_data);

        return response()->json(['success' => 'Data Added Succssfully']);
    }

    public function FetchWithId(Request $req)
    {
        if ($req->ajax()) {
            $data = Student::findOrFail($req->id);

            return response()->json(['data' => $data]);
        }
    }

    public function UpdateData(Request $req)
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ];
        $error = Validator::make($req->all(), $rules);
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = [
            'firstname' => $req->firstname,
            'lastname' => $req->lastname,
            'email' => $req->email,
            'phone' => $req->phone,
        ];

        Student::whereId($req->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data Updated Succssfully']);
    }

    // This code is correct with jquery
    // public function deleteStudent(Request $req)
    // {
    //     if ($req->ajax()) {
    //         $students = Student::find($req->id);
    //         $students->delete();
    //         return response()->json(['success' => 'Record has been Deleted']);
    //     }
    // }

    public function DeleteData($id)
    {
        if (request()->ajax()) {
            $students = Student::find($id);
            $students->delete();

            return response()->json(['success' => 'Record has been Deleted']);
        }
    }

    // Laravel Client Side Form Validation using Parsleys.js
    public function InsertValidation(Request $request)
    {
        if (request()->ajax()) {
            // Email checking code is correct.
            // $rules = array(
            //     '_email' => 'unique:tbl_register,email',
            // );
            // $error = Validator::make($request->all(),$rules);
            // if ($error->fails()) {
            //     return response()->json(['errors' => $error->errors()->all()]);
            // }

            $exist_email = DB::table('tbl_register')->where('email', $request->get('_email'))->first();
            if ($exist_email) {
                return response()->json(['errors' => 'This Email already Exists']);
            }
            $form_data = [
                'first_name' => $request->get('_firstname'),
                'last_name' => $request->get('_lastname'),
                'email' => $request->get('_email'),
                'password' => Hash::make($request->get('_password')),
                'website' => $request->get('_website'),
            ];
            DB::table('tbl_register')->insert($form_data);

            return response()->json(['success' => 'Data Added']);
        }
    }

    // Search Employee Data
    public function FetchInSelectBox(Request $req)
    {
        if ($req->ajax()) {
            $data = Student::orderBy('id', 'asc')->get();
            echo json_encode($data);
        }
    }

    public function fetchdatawithselectbox(Request $req)
    {
        if ($req->ajax()) {
            $id = $req->get('id');
            $data = Student::where('id', $id)->get();
            echo json_encode($data);
        }
    }

    // Load More Data using Ajax in Laravel
    public function loadMore(Request $request)
    {
        $datas = User::orderByDesc('created_at')->paginate(10);
        $user = '';
        if ($request->ajax()) {
            foreach ($datas as $data) {
                $user .= '<li><b>Name :</b>'.$data->name.'<b>Email:</b>'.$data->email.','.$data->mobile_no.'</li>';
            }

            return $user;
        }

        return view('ajax.loadmore', compact('datas'));
    }

    // Resize Image in Laravel
    public function resizeImage(Request $request)
    {
        // dd('Hello');
        $this->validate($request, [
            'image' => 'required|image|mimes:png,jpg,gif,jpeg,svg|max:2048',
        ]);
        $image = $request->file('image');
        $input['imagename'] = uniqid().'.'.$image->getClientOriginalExtension();
        // Resize Image
        $resizeImage = public_path('/resizeImage');
        $img = Image::make($image->getRealPath());
        $img->resize(150, 200, function ($constraints) {
            $constraints->aspectRatio();
        })->save($resizeImage.'/'.$input['imagename']);
        // Orignal Image
        $orignalImage = public_path('/orignalImage');
        $image->move($orignalImage, $input['imagename']);

        return back()->with('success', 'Image uploaded successfully')->with('imagename', $input['imagename']);
    }

    public function sendOTP(Request $request)
    {
        // $validate = Validator::make(
        //     $request->all(),
        //     [
        //         'mobile_no' => 'required|exists:users,mobile_no',
        //     ],
        //     [
        //         'mobile_no.required' => 'The Mobile number is required',
        //         'mobile_no.exists' => 'Entered number is not match our records',
        //     ]
        // )->validate();
        $rules = [
            'mobile_no' => 'required|exists:users,mobile_no',
        ];
        $messages = [
            'mobile_no.required' => 'The Mobile number is required',
            'mobile_no.exists' => 'Entered number is not match our records',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            $userOtp = $this->generateOTP($request->mobile_no);
            if ($userOtp) {
                $user = $userOtp->sendSMS($request->mobile_no);
                $userId = $userOtp->user_id; // Get the user_id from $userOtp

                return response()->json(['userId' => $userId, 'success' => 'OTP has been sent on your mobile number']);
            } else {
                return redirect()->back()->with('error', 'Failed to Send OTP');
            }
        }

        return response()->json(['error' => $validator->errors()]);
    }

    public function generateOTP($mobile_no)
    {
        $user = User::where('mobile_no', $mobile_no)->first();
        $userOtp = UsersOtp::where('user_id', $user->id)->latest()->first();
        $now = now();
        if ($userOtp && $now->isBefore($userOtp->expire_at)) {
            return $userOtp;
        }
        /*
            **********************************************************
                1:) Already Available OTP but not expired
                2:) Already Available OTP but expired
                3:) Not Available any OTP
            **********************************************************
        */
        return UsersOtp::create([
            'user_id' => $user->id,
            'user_otp' => rand(123456, 999999),
            'expire_at' => $now->addMinutes(5),
        ]);
    }

    // Load verification OTP page
    public function loadVerification($user_id)
    {
        return view('ajax.verification')->with(['user_id' => $user_id]);
    }

    // Login with OTP
    public function loginWithOtp(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'user_otp' => 'required|digits:6',
                'user_id' => 'exists:users,id',
            ],
            [
                'user_otp.required' => 'The OTP is required?',
                'user_otp.digits' => 'The OTP must be 6 digits only!',
            ]
        )->validate();

        if (! User::where('id', $request->user_id)->exists()) {
            return redirect()->back()->with('error', 'User not found');
        }
        $userOtp = UsersOtp::where('user_id', $request->user_id)->where('user_otp', $request->user_otp)->first();
        $now = now();
        if (! $userOtp) {
            return redirect()->back()->with('error', 'Your OTP is incorrect!');
        } elseif ($userOtp && $now->isAfter($userOtp->expire_at)) {
            return redirect()->back()->with('error', 'Your OTP has been Expired!');
        }

        $user = User::whereId($request->user_id)->first();
        if ($user) {
            $userOtp->update([
                'expire_at' => now(),
            ]);
            Auth::login($user);

            return redirect()->route('home');
        }
    }

    // when Login is successfully then redirect Home page
    public function Home()
    {
        if (Auth::check()) {
            return view('ajax.home');
        }

        return redirect()->route('load-more');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('load-more');
    }
}
