<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LiveTableController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DependentController;
use App\Http\Middleware\XSS;
use App\Http\Controllers\UserEmailController;
use App\Http\Controllers\LaravelBoy;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Start Laravel Boy */
Route::controller(LaravelBoy::class)->group(function(){
    Route::get('laravelboy', 'index');
});
/* End Laravel Boy */

Route::controller(StudentController::class)->group(function(){
    Route::get('/','index');
    Route::get('/fetchdata','FetchData')->name('fetchdata');
    Route::post('add-students','AddStudents')->name('add.students');
    Route::get('fetchsingle','FetchWithId')->name('fetchsingle.student');
    Route::post('update-students','UpdateData')->name('update.students');
    Route::get('deletestudents/{id}','DeleteData');
    Route::post('insertvalidation','InsertValidation')->name('insertvalidation.data');


    Route::get('fetchinselect','FetchInSelectBox')->name('fetchinselect.data');
    Route::get('fetchdatawithselectbox','fetchdatawithselectbox')->name('fetchdatawithselectbox.data');

    // Load More Data using Ajax in Laravel
    Route::get('loadmore', 'loadMore')->name('load-more');
    // Resize Image in Laravel
    Route::post('resize-image', 'resizeImage')->name('resize.img');


    // Send OTP on Mobile number
    Route::post('otp-send','sendOTP')->name('otp.send');
    // Load verification OTP page 
    Route::get('otp-verification/{user_id}','loadVerification')->name('otp.verification');
    Route::post('otp-login','loginWithOtp')->name('otp.login');

    // If login success with OTP
    Route::get('home','Home')->name('home');
    Route::get('logout','Logout')->name('logout');
});

// OTP Send & OTP Verification from mail
Route::controller(UserEmailController::class)->group(function(){
    Route::post('send-mail','sendMailOtp')->name('sendMail.otp');
    Route::get('/verification/{id}','verification');
    Route::post('/verified','verifiedOtp')->name('verified.Otp');

    // User Login
    Route::get('/load-login','loadLogin')->name('load.login');
    Route::post('/post-login','postLogin')->name('post.Login');
    // Load Dashboard
    Route::get('/dashboard','loadDashboard')->name('dashboard.emailverified');
    // // Load Login
    // Route::get('/load-login',function(){
    //     return redirect('/load-login');
    // });
    
    // Resend OTP
    Route::get('/resend-otp','resendOtp')->name('resend.Otp');
});

// Route::delete('deletestudent',[StudentController::class,'deleteStudent'])->name('deletestudent.data');


// Route::prefix('admin')->group(function(){
//     Route::get('/livetable',[LiveTableController::class, 'index']);
// });
Route::controller(LiveTableController::class)->group(function () {
    Route::get('/livetable', 'index');
        // Fetch Data
    Route::get('/fetch_data','fetch_data');
        // Add Data
    Route::post('/add_data', 'add_data')->name('add.data');
        // Update Data
    Route::post('/update_data', 'update_data')->name('update.data');
        // Delete Data
    Route::post('/delete_data','delete_data')->name('delete.data');
        // Upload Image
    route::post('/uploade', 'Upload')->name('image_upload');
        // Check Email 
    Route::post('/checkemail', 'CheckEmail')->name('Check.Email');
        // Live Search
    Route::get('/Fetch_Livetable','FetchLivetable')->name('livesearch.data');
        // Fetching Data
    Route::get('/ExportExcel','ExportExcel');
        // Importexcel
    Route::get('exporttable_excel', 'exporttable_excel')->name('ExportExcel.data');
        // Exportcsv
    Route::get('exporttable_csv', 'exporttable_csv')->name('Exportcsv.data');
        // Autocomplete
    Route::get('autocomplete_data', 'AutoComplete')->name('autocomplete.fetch');
        // Convert into PDF
    Route::get('convert_pdf', 'ConvertPdf')->name('convert_pdf.data');
        // Upload Image With Ajax
    Route::post('ajax_upload_image','Upload_Ajax_Image')->name('upload_ajax.image');
        // Send Email
    Route::post('sendemail','SendEmail')->name('sendemail');
        // Fetch Range Date with ajax
    Route::post('Fetchrange_data','FetchRangeData')->name('Fetchrange.data');
});

    // Cruds Application
Route::resource('crud',CrudController::class);
Route::controller(CrudController::class)->group(function(){
        // Dynamically Add / Remove input fields
    Route::post('dynamic_field','Dynamic_Field')->name('dynamic-fields.insert');
        // MultiJoin Table
    Route::get('multitable','MultiTableJoin');
        // Form Validation with jquery ajax
    Route::post('validation-form','Validation')->name('validation_form.data');

        // Soft Delete in Laravel
    Route::get('post','FetchSoftDelete')->name('post.index');
    Route::delete('post/{id}','Delete')->name('post.delete');
    Route::get('post/restore/one{id}','Restore')->name('post.restore');
    Route::get('post/restoreall','RestoreAll')->name('post.restoreall');

        // Typeahead JS Live Autocomplete Search in Laravel 8
    Route::get('typeheadautocomplete','TypeAheadAutocomplete');


    /*
        Laravel Technically Knowledge
        How to use DateTime in laravel 
    */
    Route::get('technical','DateAndTime');
    
});

    // Fetch Country, State, and City Data and Create Dependent Dropdown In Laravel
Route::controller(DependentController::class)->group(function(){
    Route::get('country', 'Country');
    Route::get('/get-states', 'GetStates')->name('state.data');
    Route::get('/get-cities', 'GetCities')->name('city.data');

    Route::post('/delete-data', 'DeleteData')->name('delete.data');
    Route::post('/delete-ajax', 'DeletewithAjax')->name('delete-ajax.data');
    
        // Upload multiple image and save database
    Route::post('/upload-img', 'UploadImage')->name('upload.img');
        // skip() and take() method in larave
    Route::get('/skip-take', 'fetchdatafromdatabase');

        // Route Accept Get and Post Example
        // XSS (Cross-Site-Scripting) Protection in laravel
    Route::group(['middleware'=>['XSS']],function(){
        Route::match(['GET','POST'],'/login', 'Login');
    });

        // Ajax Autocomplete search from database
    Route::get('/search-data', 'Autocomplete')->name('search.data');
       
        // Ajax Multiple searching from database
    Route::get('/filter-data', 'FilterData')->name('filter.data');

        // How to Filter data using select box with Ajax
    Route::get('/selectfilter-data', 'FilterSelectData')->name('selectfilter.data');

        // How to upload file into database using Ajax
    Route::post('/uploadimg-store', 'UploadImageStore')->name('uploadimg.store');

        // Laravel Drag and drop image uploade
    Route::post('/uploaddraganddrop', 'DragandDrop')->name('draganddrop.image');

        // How to create datatables with pagination and searching
    Route::get('/DataTable-data', 'DataTable')->name('DataTable.data');

        // How to fetch data from api and save data into database
    Route::get('/FetchApiSaveDatabase-data', 'FetchApiSaveDatabase')->name('FetchApiSaveDatabase.data');

        // Ajax form validation in laravel
    Route::post('/FormVaidation-data', 'FormVaidation')->name('FormVaidation.data');

        // How to store multiple select value
    Route::post('/MultiSelect-data', 'MultiSelect')->name('MultiSelect.data');

        // How to store multiple checkbox value
    Route::post('/Multicheckbox-data', 'MultiCheckbox')->name('Multicheckbox.data');    

        // Increment and show count of download images
    Route::get('/downloadimage-data', 'DownloadImage')->name('downloadimage.data');
});
