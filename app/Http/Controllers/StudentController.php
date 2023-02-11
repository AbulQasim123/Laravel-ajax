<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    public function index(){
        $data = Http::get('https://api.countrystatecity.in/v1/countries');
        $data = json_decode($data);
        return view('ajax.students', compact('data'));
    }

    public function FetchData(Request $req){
        if ($req->ajax()) {
            $data = Student::orderBy('id','asc')->get();
            echo json_encode($data);
        }
    }
    public function AddStudents(Request $req){
        $rules = array(
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
        );
        $error = Validator::make($req->all(),$rules);
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'firstname' => $req->firstname,
            'lastname' => $req->lastname,
            'email' => $req->email,
            'phone' => $req->phone
        );

        Student::create($form_data);
        return response()->json(['success' => 'Data Added Succssfully']);
    }

    public function FetchWithId(Request $req){
        if ($req->ajax()) {
            $data = Student::findOrFail($req->id);
            return response()->json(['data' => $data]);
        }
    }

    public function UpdateData(Request $req){
        $rules = array(
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        );
        $error = Validator::make($req->all(),$rules);
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'firstname' => $req->firstname,
            'lastname' => $req->lastname,
            'email' => $req->email,
            'phone' => $req->phone
        );

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
    public function InsertValidation(Request $request){
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
            $form_data = array(
                'first_name' => $request->get('_firstname'),
                'last_name' => $request->get('_lastname'),
                'email' => $request->get('_email'),
                'password' => Hash::make($request->get('_password')),
                'website' => $request->get('_website'),
            );
            DB::table('tbl_register')->insert($form_data);
            return response()->json(['success' => 'Data Added']);
        }
    }

        // Search Employee Data
    public function FetchInSelectBox(Request $req){
        if ($req->ajax()) {
            $data = Student::orderBy('id','asc')->get();
            echo json_encode($data);
        }
    }

    public function fetchdatawithselectbox(Request $req){
        if ($req->ajax()) {
            $id = $req->get('id');
            $data = Student::where('id',$id)->get();
            echo json_encode($data);
        }
    }
}
