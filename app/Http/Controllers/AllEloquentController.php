<?php

namespace App\Http\Controllers;

use App\Models\AddPost;
use App\Models\AddUser;
use Illuminate\Http\Request;
use App\Models\AddCategory;
use App\Models\AddProduct;

class AllEloquentController extends Controller
{
    // hasMany nested Relationship
    public function getDataHasMany(Request $request){
        $results = AddUser::with(['posts','posts.tags'])->where('id', $request->id)->get();

        // $resultsPost = AddPost::with('tags')->get();
        // return response()->json($resultsPost);

        return response()->json($results);
    }

    // hasMany Through Relationship
    public function getDataHasTrough(Request $request){
        // $results = AddCategory::all();
        // $results = AddCategory::where('id',$request->id)->get();
        $results = AddCategory::with('orders')->where('id', $request->id)->get();

        return response()->json($results);
    }    
}
