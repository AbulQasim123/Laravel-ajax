<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Exports\liveexport;
use Excel;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;
use Illuminate\Support\Arr;

class LiveTableController extends Controller
{
    public function index()
    {
        return view('livetable.livetable');
    }
    public function fetch_data(Request $req){
        if ($req->ajax()) {
            $data = DB::table('livetable')->orderBy('id','desc')->get();
            echo json_encode($data);
        }
    }

    public function add_data(Request $req){
        if ($req->ajax()) {
            $data = array(
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
            );
            $id = DB::table('livetable')->insert($data);
            if ($id > 0) {
                echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button>Data insertd Successfully.</div>';
            }
        }
    }

    public function update_data(Request $req){
		if ($req->ajax()) {
            $data = array(
                $req->column_name => $req->column_value
            );
            DB::table('livetable')->where('id',$req->id)->update($data);
            echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button>Data Updated Successfully.</div>';
        }
    }

    public function delete_data(Request $req){
        if ($req->ajax()) {
            DB::table('livetable')->where('id', $req->id)->delete();
            echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button>Data Deleted Successfully.</div>';
        }
    }

        // Image upload in laravel by ajax
    public function Upload(Request $req){
        Validator::make($req->all(),[
            'Image' => 'required|image|mimes:jpg,png,jpeg,gif|max:1024',
        ],
        [
            'Image.required' => 'Image must be required',
            'Image.image' => 'Only Select Image type file',
            'Image.mimes' => 'Image support only this type = jpg, png, jpeg, gif',
            'Image.max' => 'You can select only less than 1 MB',
        ])->validate();
        $image = $req->file('Image');
        $new_image = rand(). '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'),$new_image);
        return back()->with('success','Image Uploaded successfully')->with('path',$new_image);
    }
        // Check Email Availability
    public function CheckEmail(Request $req){
        if ($req->get('email')) {
            $email = $req->get('email');
            $data = DB::table('users')->where('email',$email)->count();
            if($data > 0){
                echo 'not_unique';
            }else{
                echo 'unique';
            }
        }
    }

        // // Live search in Laravel using AJAX

    function FetchLivetable(Request $req){
        if ($req->ajax()) {
            $output = '';
            $query = $req->get('query');
            if ($query != '') {
               $data = DB::table('livetable')->where('first_name', 'like', '%'.$query.'%')
                                            ->orWhere('last_name', 'like', '%' .$query. '%')->get();
            }else{
                $data = DB::table('livetable')->orderBy('id','desc')->get();
            }
            $total_row = $data->count();
            if ($total_row > 0 ) {
                foreach ($data as $row) {
                    $output .= '<tr>
                        <td>'.$row->first_name.'</td>
                        <td>'.$row->last_name.'</td>
                    </tr>';
                }
            }else{
                $output .= '<tr><td align="center" colspan="5">No Data Found</td></tr>';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row,
            );
            echo json_encode($data);
        }
    }


        // Export Data to Excel in Laravel using Maatwebsite
    public function exporttable_excel(){

        return Excel::download(new liveexport, 'dummy.xlsx');
        // $returndata = new liveexport();
        // Excel::create("Dummy data", function($excel) use ($returndata){
        //     $excel->setTitle("Dummy Data");
        //     $excel->sheet("Dummy Data", function($sheet) use ($returndata){
        //         $sheet->fromArray($returndata, null, 'A1', false, false);
        //     });
        // })->download('xlsx');
    }


    public function exporttable_csv(){

        return Excel::download(new liveexport, 'dummy.csv');
    }

        // Ajax Autocomplete Textbox in Laravel using JQuery.
    public function AutoComplete(Request $req){
        if ($req->get('query')) {
            $query = $req->get('query');
            $data = DB::table('apps_countries')->where('country_name', 'LIKE', "%{$query}%")->paginate(10);
            $output = '<ul style="">';
            foreach ($data as $row) {
                $output .= '<li style="list-style-type:none; margin-left: -35px; padding:10px; border-bottom: 1px solid #eee; cursor:pointer;" class="autocomplete_li">'.$row->country_name.'</li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

        // Laravel - How to Generate Dynamic PDF from HTML using DomPDF
    public function ConvertPdf(){
        $datas  = [
                'datas' => DB::table('livetable')->get(),
                'title' => "Customer Data",
            ];
        $pdf = PDF::loadView('livetable.convertpdf', $datas);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('dummy.pdf');
        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML('livetable.convertpdf');
        // return $pdf->stream();
    }

        // Upload Image in Laravel using Ajax
    public function Upload_Ajax_Image(Request $request){
        $validation = Validator::make($request->all(),[
            'selectimage' => 'required|image|mimes:jpg,png,jpeg,gif|max:1024',
        ],
        [
            'selectimage.required' => 'Image must be required',
            'selectimage.image' => 'Only Select Image file.<br>',
            'selectimage.mimes' => 'Image support only this type = jpg, png, jpeg, gif',
            'selectimage.max' => 'You can select only less than 1<= MB',
        ]);

        if ($validation->passes()) {
            $image = $request->file('selectimage');
            $new_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_image);
            return response()->json([
                'message' => 'Image Uploaded successfully.',
                'uploaded_image' => '<img src="/images/'.$new_image.' " width="200" />',
                'class_name' => 'alert-success',
            ]);
        }else{
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name' => 'alert-danger',
            ]);
        }
    }

        // How Send an Email in Laravel.
    public function SendEmail(Request $req){
        $this->validate($req,[
            'sendname' => 'required',
            'sendemail' => 'required|email',
            'sendmessage' => 'required'
        ]);
        $data = array(
            'sendname' => $req->sendname,
            'sendemail' => $req->sendemail,
            'sendmessage' => $req->sendmessage,
        );
        Mail::to($req->sendemail)->send(new Sendmail($data));
        return back()->with('success','Thanks for contacting us.');
    }

        // Date Range Filter Data in Laravel using Ajax
    public function FetchRangeData(Request $request){
        if ($request->ajax()) {
            if ($request->from_date != '' && $request->to_date != '') {
                $data = DB::table('post')->whereBetween('date', array($request->from_date, $request->to_date))->get();
            }else{
                $data = DB::table('post')->orderBy('date','desc')->get();
            }
            echo json_encode($data);
        }
    }
}
