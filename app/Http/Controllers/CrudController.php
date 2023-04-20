<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\DynamicField;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\SendMail;
use App\LastId;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *p
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Crud::latest()->paginate(5);
        $data = Crud::get();
        return view('cruds.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cruds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validataion = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'images' => 'required|mimes:jpg,png,jpeg|max:5120',
        ],
        [
            'firstname.required' => 'First Name is Required ?',
            'lastname.required' => 'Last Name is Required ?',
            'images.required' => 'Image is required ?',
            'images.mimes' => 'Only upload type of Image, Your file format support only jpg , jpeg , png',
            'images.max' => 'You can select only less than 1 MB',
        ])->validate();
        $image= $request->file('images');
        // print_r($image);
        $new_name = rand(). '.' . $image->getClientOriginalExtension();
        $image->move(public_path('crudimg'),$new_name);
        $form_data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'image' => $new_name,
        );
        Crud::create($form_data);
        return redirect('crud')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('cruds.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Crud::findOrFail($id);
        return view('cruds.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_img;
        $image = $request->file('images');
        
        if ($image != '') {
            Validator::make($request->all(),[
                'firstname' => 'required',
                'lastname' => 'required',
                'images' => 'required|mimes:jpg,png,jpeg|max:5120',
            ],
            [
                'firstname.required' => 'First Name is Required ?',
                'lastname.required' => 'Last Name is Required ?',
                'images.required' => 'Image is required ?',
                'images.mimes' => 'Only upload type of Image, Your file format support only jpg , jpeg , png',
                'images.max' => 'You can select only less than 1 MB',
            ])->validate();

            $image_name = rand(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('crudimg'),$image_name);
        }else{
            Validator::make($request->all(),[
                'firstname' => 'required',
                'lastname' => 'required',
            ],
            [
                'firstname.required' => 'First Name is Required ?',
                'lastname.required' => 'Last Name is Required ?',
            ])->validate();
        }
        $form_data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'image' => $image_name,
        );
        Crud::whereId($id)->update($form_data);
        return redirect('crud')->with('success','Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect('crud')->with('success','Data is successfully deleted.');
    }
    

        // Dynamically Add / Remove input fields in Laravel 8 using Ajax jQuery
    public function Dynamic_Field(Request $request){
        if ($request->ajax()) {
            $rules = array(
                'firstname.*' => 'required',
                'lastname.*' => 'required'
            );
            $error = Validator::make($request->all(),$rules);
            if ($error->fails()) {
                return response()->json([
                    'error' => $error->errors()->all(),
                ]);
            }

            $firstname = $request->firstname;
            $lastname = $request->lastname;
            for($count = 0; $count < count($firstname); $count++ ){
                $data = array(
                    'firstname' => $firstname[$count],
                    'lastname' => $lastname[$count]
                );
                $insert_data[] = $data;
            }
            DynamicField::insert($insert_data);
            return response()->json([
                'success' => 'Data Added successfully.',
            ]);
        }
    }

        // Laravel 8 - Join Multiple Table
    public function MultiTableJoin(){
        $data = DB::table('city')
                ->join('state', 'state.id', '=', 'city.id')
                ->join('country','country.id', '=', 'state.id')
                ->select('country.country_name','state.state_name','city.city_name')
                ->get();
        return view('cruds.jointable',compact('data'));
    }

        // jQuery Form Validation in Laravel with Send Email
    public function Validation(Request $request){
        $data = array(
            'firstname' => $request->valid_name,
            'email' => $request->valid_email,
            'messages' => $request->valid_message,
        );
        Mail::send('cruds.sendmail', $data, function($message) use ($request){
            $message->to('hellolara786@gmail.com')->subject('New Enquiry Recieved ' .$request->valid_name);
            $message->from($request->valid_email, $request->valid_name);
        });
        SendMail::insert($data);
        return redirect()->back()->with('success', 'Message has been sent...');
    }

        // How to Use Soft Delete in Laravel
	public function FetchSoftDelete(Request $request){
		$data = Crud::all();
        if ($request->has('view_deleted')) {
            $data = Crud::onlyTrashed()->get();
        }
		return view('cruds.softdelete',compact('data'));
	}
    public function Delete($id){
        Crud::find($id)->delete();
        return back()->with('success', 'Data is successfully deleted.');
    }
    public function Restore($id){
        Crud::withTrashed()->find($id)->restore();
        return back()->with('success', 'Data Restore Successfully');
    }
    public function RestoreAll(){
        Crud::onlyTrashed()->restore();
        return back()->with('success', 'All Data Restore Successfully');
    }

        // Typeahead JS Live Autocomplete Search in Laravel 8
    public function TypeAheadAutocomplete(Request $request){
        $query = $request->input('query');
        $data = DB::table('apps_countries')->where('country_name', 'LIKE', '%' .$query. '%')->get();

        $filterdata = array();
        foreach ($data as $row) {
            $filterdata[] = $row->country_name;
        }
        return response()->json($filterdata);
    }

        /* 
            Laravel Technically Knowledge
           
        */ 
        //  How to use DateTime in laravel  
    public function DateAndTime(){
        // $date = new DateTime();
        // echo $date->format('d-m-Y h:i:s');

        // How to add Days in DateTime
        $date1 = new DateTime("11-12-2022");
        $newdate = $date1->add(new DateInterval("P5D"));
        echo $newdate->format('d-m-Y');

            // How to get data from database greater than or equal date in laravel
        
        // return Crud::whereDate('created_at', '<', date('Y-m-d'));

            // How to read csv file data in laravel 
        // $users = [];
        // if (($open = fopen(storage_path()."/user.csv","r")) !== false) {
        //     while (($data = fgetcsv($open,",")) !== false) {
        //         $users = $data;
        //     }
        //     fclose($open);
        // }
        // echo "<pre>";
        // printf($users);

            // How to Delete file in laravel
        // $file = storage_path("arrow.png");
        // $img = File::delete($file);
        // dd($img);

            // How to generate word document from html in laravel
        
        // $header = array(
        //     'Content-type' => 'text/html',
        //     'Content-Disposition' => 'attachment;filename=mydoc.doc',
        // );
        // return Response::make(view('welcome'),200,$header);


            /* How to registration in laravel */
            
        /*
            public function register(Request $req){
                $this->validator($req->all())->validate();
                $this->create($req->all());
                return redirect('/dashboard');
            }
            public function validator(array $data){
                return Validator::make($data,[
                    'name' => ['required','string'],
                    'email' => ['required','string','email'],
                    'password' => ['required','string'],
                ]);
            }
            public function create(array $data){
                User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']);
                ]);
            }
        */
    }

}
