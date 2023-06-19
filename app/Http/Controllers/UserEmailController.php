<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserEmailVerification;
use App\Models\UserEmailRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserEmailController extends Controller
{
    // OTP Send & OTP Verification from mail
    public function sendMailOtp(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:3',
                'email' => 'required|email|max:100|unique:users',
                'password' => 'required|confirmed|min:6|max:16'
            ],
            [
                'name.required' => 'The Name is required?',
                'name.string' => 'The Name is only Strings!',
                'name.min' => 'The Name is must be 3 chars long!',
                'email.required' => 'The email is required?',
                'email.email' => 'Please enter the valid email Address!',
                'email.max' => 'The email is over 100 chars long!',
                'email.unique' => 'This email is taken by another!',
                'password.required' => 'The Password is required?!',
                'password.confirmed' => 'Confirm password not match with password!',
                'password.min' => 'The Password is must be 3 chars long!',
                'password.max' => 'The Password is too long. Allow only 16 chars!',
            ]
        )->validate();


        $user = new UserEmailRegistration;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/verification/' . $user->id)->with('success','Registration successfull. we have sent an OTP on your email.Check your email and Verify your Email.');
    }

    // Send OTP
    public function sendOTP($user){
        $otp = rand(100000,999999);
        $time = time();

        UserEmailVerification::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'otp' => $otp,
                'created_at' => $time,
            ]
        );

        $data['email'] = $user->email;
        $data['title'] = 'Mail Verification';
        $data['body'] = 'Your OTP is '. $otp;

        Mail::send('ajax.mailotpverifaication',['data' => $data], function($message) use ($data){
            $message->to($data['email'])->subject($data['title']);
        });
    }

    // verified OTP
    public function verifiedOtp(Request $request){
        $user = UserEmailRegistration::where('email',$request->email)->first();
        $otpData = UserEmailVerification::where('email',$request->email)->first();

        if (!$otpData) {
            return response()->json(['status' => false, 'msg' => 'You entered wrong OTP']);
        }else{
            $currentTime = time();
            $time = $otpData->created_at;
            if ($currentTime >= $time && $time >= $currentTime - (90+5)) {  // 90 minutes
                UserEmailRegistration::where('id', $user->id )->update([
                    'is_verified' => 1
                ]);
                return response()->json(['status' => true, 'msg' => 'Mail has been Verified']);
            }else{
                return response()->json(['status' => false,'msg'=> 'Your OTP has been Expired']);
            }
        }
    }

    // User Login
    public function postLogin(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:16'
            ],
            [
                'email.required' => 'The email is required?',
                'email.email' => 'Please enter the valid email Address!',
                'password.required' => 'The Password is required?!',
                'password.min' => 'The Password is must be 3 chars long!',
                'password.max' => 'The Password is too long. Allow only 16 chars!',
            ]
        )->validate();

        $userCredential = $request->only('email','password');
        
        $userData = UserEmailRegistration::where('email',$request->email)->first();
        // dd($userData);
        if($userData && $userData->is_verified == 0){
            $this->sendOtp($userData);
            return redirect('/verification/' . $userData->id);
        }else if(Auth::guard('custom')->attempt($userCredential)){
            // return view('ajax.dashboard');
            return redirect()->route('dashboard.emailverified');
        }else{
            return back()->with('error','Username & Password is incorrect');
        }
    }

    // Load Dashboard
    public function loadDashboard(){
        if(Auth::user()){
            return view('ajax.dashboard');
        }
        return redirect()->route('load.login');
    }
    
    // Load Login
    public function loadLogin(){
        if(Auth::user()){
            return redirect()->route('dashboard.emailverified');
        }
        return view('ajax.emailverificationlogin');
    }

    // Resend OTP
    public function resendOtp(Request $request){
        $user = UserEmailRegistration::where('email', $request->email)->first();
        $otpData = UserEmailVerification::where('email', $request->email)->first();
        $currentTime = time();
        $time = $otpData->created_at;

        if ($currentTime >= $time && $time >= $currentTime - (90+5)) { // 90 Seconds
            return response()->json(['status' => false, 'msg' => 'Please Try after some time']);
        }else{
            $this->sendOTP($user); // Send OTP
            return response()->json(['status' => true, 'msg' => 'OTP has been Sent']);
        }
    }

    // Load email verification page
    public function verification($id){
        $user = UserEmailRegistration::whereId($id)->first();
        if (!$user || $user->is_verified == 1) {
            return redirect('/');
        }
        $email = $user->email;
        $this->sendOTP($user); // Send OTP
        return view('ajax.verificationmail',compact('email'));
    }
}
