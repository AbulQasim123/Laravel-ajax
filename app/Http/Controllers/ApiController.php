<?php

namespace App\Http\Controllers;

use App\Models\DynamicField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    // Get data by api
    public function ApiDataone()
    {
        return ['Name' => 'Rahul', 'Gender' => 'Male', 'Address' => 'Mauaima'];
    }

    // public function ApiDatatwo(){
    //     return DB::table('livetable')->get();
    // }
    public function ApiDatatwo($id)
    {
        return DB::table('livetable')->find($id);
    }

    public function ApibyModel($id = null)
    {
        $result = $id ? DynamicField::find($id) : DynamicField::all();
        if ($result) {
            return $result;
        } else {
            return ['result' => 'Data Not Found'];
        }
    }

    // Post data by api
    public function PostApi(Request $req)
    {
        $postdata = new DynamicField;
        $postdata->firstname = $req->firstname;
        $postdata->lastname = $req->lastname;
        $result = $postdata->save();
        if ($result) {
            return ['return' => 'Data has been saved'];
        } else {
            return ['return' => 'Data not has been saved'];
        }
    }

    // Update data by Api
    public function UpdateApi(Request $req)
    {
        $postdata = DynamicField::find($req->id);
        if ($postdata) {
            $postdata->firstname = $req->firstname;
            $postdata->lastname = $req->lastname;
            $result = $postdata->save();
            if ($result) {
                return ['return' => 'Data has been Updated'];
            } else {
                return ['return' => 'Updation Failed'];
            }
        } else {
            return ['return' => 'Record Not Found'];
        }

    }

    // Delete data by api
    public function DeleteApi($id)
    {
        $existId = DynamicField::find($id);
        if ($existId) {
            $result = DynamicField::where('id', $id)->delete();
            if ($result) {
                return ['return' => 'Data has been Deleted'];
            } else {
                return ['return' => 'Deletion Failed'];
            }
        } else {
            return ['return' => 'Record Not Found'];
        }
    }

    // Search Data by Api
    public function SearchDataApi($name)
    {
        return DynamicField::where('firstname', 'like', '%'.$name.'%')->get();
    }

    // Validation Post Api
    public function ValidationApi(Request $req)
    {
        $rules = [
            'firstname' => 'required|min:3|max:10',
            'lastname' => 'required|min:3|max:10',
        ];
        $validation = Validator::make($req->all(), $rules);
        if ($validation->fails()) {
            return response()->json($validation->errors(), 401);
        } else {
            // return ['data' => 'Correct'];
            $postdata = new DynamicField;
            $postdata->firstname = $req->firstname;
            $postdata->lastname = $req->lastname;
            $result = $postdata->save();
            if ($result) {
                return ['return' => 'Data inserted database'];
            } else {
                return ['return' => 'Data not has been saved'];
            }
        }

    }
}
