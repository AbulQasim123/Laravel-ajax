@extends('ajax.master')
@section('content')

    <div class="container-fluid">
        <h4 align="center">Fetch Country, State, and City Data and Create Dependent Dropdown In Laravel</h4>
        <div class="row">
            <div class="col-md-4">
                <select name="countries" id="countries" class="form-control">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                        @php  $country = (array)$country @endphp
                        <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <select name="states" id="states" class="form-control">
                    <option value="">Select State</option>
                </select>
            </div>
            <div class="col-md-4">
                <select name="cities" id="cities" class="form-control">
                    <option value="">Select City</option>
                </select>
            </div>
            <input type="hidden" name="token" id="token" value="{{ $token }}">
        </div>

                <!-- Delete Multiple record with checkbox in laravel -->

        <div class="row my-3">
            <div class="col-md-6">
                <h4 align="center">Delete Multiple Record</h4>
                <form action="{{ route('delete.data') }}" method="POST">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Delete</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($students) > 0)
                                    @foreach($students as $student)
                                        <tr>
                                            <td><input type="checkbox" id="ids" name="ids[{{ $student->id }}]" value="{{ $student->id }}" required></td>
                                            <td>{{ $student->firstname }}</td>
                                            <td>{{ $student->lastname }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Data Not Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <input type="submit" value="Delete" id="delete" name="delete" class="btn btn-danger btn-sm">
                    </div>
                </form>
            </div>

                 <!-- Delete Multiple record with checkbox by ajax method in laravel -->
            <div class="col-md-6">
                <h4 align="center">Delete Multiple Record By Ajax</h4>
                <form id="DeleteUser">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Delete</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($students) > 0)
                                @foreach($students as $student)
                                    <tr class="{{ $student->id }}">
                                        <td><input type="checkbox" id="" name="del_id[]" value="{{ $student->id }}"></td>
                                        <td>{{ $student->firstname }}</td>
                                        <td>{{ $student->lastname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">Data Not Found</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <span id="success_msg" class="text-success"></span>
                        <span id="error_msg" class="text-danger"></span><br>
                        <input type="submit" value="Delete" id="delete_ajax" name="delete_ajax" class="btn btn-danger btn-sm">
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                            <!-- Upload multiple Images and save Database -->
                <h4 align="center">Upload multiple Images and save Database</h4>
                <div class="form-group">
                    <form action="{{ route('upload.img') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="upload_img">Upload Images</label>
                        <input type="file" name="images[]" id="images" multiple="multiple">
                        <input type="submit" value="Upload" id="image" name="image" class="btn btn-primary 
                        btn-sm">
                    </form>
                    <script>
                            // This code is working, Ignore red underline
                        @if(Session::has('suc-img'))
                            toastr.options = {
                                'closeButton':true,
                                'progressBar':true,
                            }
                            toastr.success("{{ session('suc-img') }}")
                        @endif
                    </script>
                </div>
            </div>
                            <!-- Ajax Autocomplete search from database -->
            <div class="col-md-6">
                <h4 align="center">Ajax Autocomplete search from database</h4>
                <div class="form-group">
                    <label for="">Search</label>
                    <input type="text" name="search" id="search" class="form-control" 
                    placeholder="Search">
                    <div id="search_output"></div>
                </div>
            </div>
        </div>

        <div class="row">
                            <!-- Ajax Multiple searching from database -->
            <div class="col-md-6">
                <h4 align="center">Ajax Multiple searching from database</h4>
                <div class="form-group">
                    <label for="">Search</label>
                    <input type="text" name="filter" id="filter" class="form-control"   
                    placeholder="Search">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody id="filter_data">
                        @if(count($students) > 0)
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Data Not Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
                            <!-- // How to Filter data using select box with Ajax -->
            <div class="col-md-6">
                <h4>How to Filter data using select box with Ajax</h4>
                <div class="form-group">
                    <label for="select_filter">Select Categories</label>
                    <select name="select_filter" id="select_filter" class="form-control">
                        <option value="">Select Products</option>
                        @if(count($categories) > 0)
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        @else
                            <option value="">No Categories Found</option>
                        @endif
                    </select>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody id="selectfilter_data">
                        @if(count($products) > 0)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">Data Not Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                            <!-- How to upload file into database using Ajax -->
        <div class="row">
            <div class="col-md-6">
                <h4 align="center">How to upload file into database using Ajax</h4>
                <div class="form-group">
                    <form id="imageupload">
                        @csrf
                        <label for="upload_image">Upload Images</label>
                        <input type="file" name="upload_image" id="upload_image" class="">
                        <button type="submit" class="btn btn-primary btn-sm"        
                        id="btn_upload_images">Upload</button>
                        <div id="image_error" class="text-danger"></div>
                    </form>
                </div>
            </div>
                            <!-- Laravel Drag and drop image uploade -->
            <div class="col-md-6">
                <h4 align="center">Laravel Drag and drop image uploade</h4>
                <div class="form-group">
                    <form method="post" action="{{ route('draganddrop.image') }}" enctype="multipart/form- 
                        data" class="dropzone" id="upload_data">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
                            <!-- How to create datatables with pagination and searching -->
        <div class="row">
            <div class="col-md-6">
                <h4 align="center">Create datatables with pagination and searching</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover datatables_data table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
                            <!-- How to fetch data from api and save data into database -->
            <div class="col-md-6">
                <h4 align="center">Fetch data from api and save into database</h4>
                <div class="table-responsive">
                    <a href="{{ route('FetchApiSaveDatabase.data') }}" class="btn btn-primary btn-sm">
                        Insert data into Database
                    </a>
                </div>
            </div>
        </div>
                        <!-- Ajax form validation in laravel -->
        <div class="row">
            <div class="col-md-6">
                <h4 align="center">Ajax form validation in laravel</h4>
                <div>
                    <form id="validation_form">
                        @csrf
                        <div class="">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                            <pre class="error username_error text-danger"></pre>
                        </div>
                        <div class="">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                            <pre class="error email_error text-danger"></pre>
                        </div>
                        <div class="">
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password" class="form-control">
                            <pre class="error password_error text-danger"></pre>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" id="valid_btn"     
                        name="valid_btn">Submit</button>
                    </form>
                </div>
            </div>
                            <!-- How to store multiple select value -->
            <div class="col-md-6">
                <h4>How to store multiple select value</h4>
                <div>
                    <form action="{{ route('MultiSelect.data') }}" method="POST">
                        @csrf
                        <label for="enter_name">Enter Name</label>
                        <input type="text" id="enter_name" name="enter_name" 
                        class="form-control" placeholder="Enter Name">
                        <label for="hobey">Select Hobey</label>
                        <select name="hobey[]" multiple="multiple"  id="hobey" 
                        class="form-control">
                            <option value="">Select Hobey</option>
                            <option value="Cricket">Cricket</option>
                            <option value="Singing">Singing</option>
                            <option value="Playing">Playing</option>
                            <option value="Listening">Listening</option>
                            <option value="Travelling">Travelling</option>
                        </select><br>
                        @if($errors->any())
                            <ul>
                            @foreach($errors->all() as $selecterror)
                                <li class="text-danger"> {{ $selecterror }} </li>
                            @endforeach
                            </ul>
                        @endif
                        <button type="submit" class="btn btn-primary btn-sm" id="multiselect_btn">
                        Submit</button>
                    </form>
                </div>
            </div>
        </div>
                            <!-- How to store multiple checkbox value -->
        <div class="row">
            <div class="col-md-6">
                <h4 align="center">How to store multiple checkbox value</h4>
                <div>
                    <form action="{{ route('Multicheckbox.data') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="checkbox_name">Enter Name</label>
                            <input type="text" id="checkbox_name" name="checkbox_name" 
                            class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Select Language:- </label>
                            PHP <input type="checkbox" name="language[]" value="PHP">
                            jQUERY <input type="checkbox" name="language[]" value="jQUERY">
                            JAVA <input type="checkbox" name="language[]" value="JAVA">
                            PYTHON <input type="checkbox" name="language[]" value="PYTHON">
                            JAVASCRIPT <input type="checkbox" name="language[]" value="JAVASCRIPT">
                            LARAVEL <input type="checkbox" name="language[]" value="LARAVEL">
                        </div>
                        @if($errors->any())
                            <ul>
                            @foreach($errors->all() as $checkboxerror)
                                <li class="text-danger"> {{ $checkboxerror }} </li>
                            @endforeach
                            </ul>
                        @endif
                        <button type="submit" class="btn btn-primary btn-sm">
                        Submit</button>
                    </form>
                </div>
            </div>
                            <!-- How to view multiple checkbox value -->
            <div class="col-md-6">
                <h4 align="center">How to view multiple checkbox value</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Language</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($showcheckboxs) > 0)
                            @foreach($showcheckboxs as $showcheckbox)
                                <tr>
                                    <td>{{ $showcheckbox->id }}</td>
                                    <td>{{ $showcheckbox->name }}</td>
                                    <td>
                                        @php
                                            $languages = json_decode($showcheckbox->language)
                                        @endphp
                                        @foreach($languages as $language)
                                            {{ $language }},
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Data Not Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                            <!-- Increment and show count of download images -->
        <div class="row">
            <div class="col-md-12">
            <h4 align="center">Increment and show count of download images</h4>
                <div class="image-responsive" style="border: 1px solid black;">
                    @if(count($downloadimages) > 0)
                        @foreach($downloadimages as $image)
                            <div style="display: inline-block; margin: 10px; padding: 5px;">
                                <img src="{{ asset('images/'.$image->path) }}"alt="Not Found" 
                                width="200" height="200" class="img-thumbnail"><br><br>

                                Download- <span class="count{{ $image['id'] }}">{{ $image['count'] }} 
                                </span><br><br>

                                <a href="{{ 'public/'.$image['path'] }}" target="_blank" download="{{ 
                                $image['name'] }}" data-id="{{ $image['id'] }}" class="downloader"> 
                                <button class="btn btn-primary btn-sm">Download</button></a>
                            </div>
                        @endforeach
                    @else
                        <div>No Image found</div>
                    @endif
                </div><br>
                <h4>Total Download- <span class="total_count">{{$totalcount}}</span></h4>
            </div>
        </div>
    </div>
    <style>
            /* Laravel Drag and drop image uploade */
        .dropzone .dz-message .dz-button {
            color: black;
            font-size: 19px;
            font-style: italic;
        }
    </style>
    <script>

            // Laravel Drag and drop image uploade
        Dropzone.options.imageUpload = {
            maxFilesize:1,
            acceptFiles: '.jpg,.jpeg,.png,.gif',
        }
    
            //  Delete Multiple record with checkbox by ajax method in laravel
        $(document).ready(function(){
            $('#DeleteUser').submit(function(e){
                e.preventDefault();
                var deletedata = $(this).serialize();
                $.ajax({
                    url: "{{ route('delete-ajax.data') }}",
                    type: "POST",
                    data: deletedata,
                    // error: function(data){
                    //     if (data.success == false) {
                    //         $('#').html();
                    //     }
                    // },
                    success: function(data){
                        if (data.success == true) {
                            var del_id = data.del_id;
                            for (let i = 0; i < del_id.length; i++) {
                                $('.'+del_id[i]).remove();
                                $('#success_msg').html(data.msg);
                                $('#error_msg').html('');
                            }
                        }else{
                            $('#error_msg').html(data.msg);
                            $('#success_msg').html('');
                        }
                    }
                })
            })

                // Ajax Autocomplete search from database
            $('#search').on('keyup', function(){
                var value = $(this).val();
                if (value != "") {
                    $.ajax({
                        url: "{{ route('search.data') }}",
                        type: "GET",
                        data: {value:value},
                        success: function(result){
                            $('#search_output').html(result);
                        }
                    }) 
                }else{
                    $('#search_output').html(''); 
                }
            })
            $(document).on('click', '.list_item', function(){
                // var value = $(this).text();
                // alert(value);
                // $('#search_output').val(value);
                $('#search').val($(this).text());
                $('#search_output').html('');
            })


                // Ajax Multiple searching from database
            $('#filter').on('keyup', function(){
                var filter = $(this).val();
                $.ajax({
                    url: "{{ route('filter.data') }}",
                    type: "GET",
                    data: {filter:filter},
                    success: function(result){
                        var result = result.data;
                        var html = '';
                        if (result.length > 0) {
                            for(var i = 0; i < result.length; i++){
                                html +='<tr><td>'+result[i]['firstname']+'</td><td>'+result[i]  
                                ['lastname']+'</td><td>'+result[i]['email']+'</td><td>'+result[i] 
                                ['phone']+'</td></tr>';
                            }
                        }else{
                            html +='<tr align="center"><td colspan="4">No Data Found.</td></tr>';
                        }
                        $('#filter_data').html(html);
                    }
                }) 
            })

                // How to Filter data using select box with Ajax
            $('#select_filter').change(function(){
                var selectfilter = $(this).val();
                // alert(selectfilter);
                $.ajax({
                    url: "{{ route('selectfilter.data') }}",
                    type: "GET",
                    data: {selectfilter:selectfilter},
                    success: function(result){
                        var result = result.data;
                        var html = '';
                        if (result.length > 0) {
                            for(var i = 0; i < result.length; i++){
                                html +='<tr><td>'+result[i]['name']+'</td><td>'+result[i]  
                                ['price']+'</td><td>'+result[i]['description']+'</td></tr>';
                            }
                        }else{
                            html +='<tr align="center"><td colspan="3">No Data Found.</td></tr>';
                        }
                        $('#selectfilter_data').html(html);
                    }
                }) 
            })

                    // How to upload file into database using Ajax
            $('#imageupload').submit(function(e){
                e.preventDefault();
                // alert('hello');
                // $('#image_error').text('');
                var formdata = new FormData(this);
                $.ajax({
                    url : "{{ route('uploadimg.store') }}",
                    type: "POST",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function(result){
                        if (result.success) {
                            $('#imageupload')[0].reset();
                            $('#image_error').html(result.success);
                            $('#image_error').removeClass('text-danger');
                            $('#image_error').addClass(result.class_name);
                        }
                    },
                    error: function(result){
                        $('#image_error').text(result.responseJSON.message);
                    }
                })
            })

                // How to create datatables with pagination and searching
            $(function(){
                var table = $('.datatables_data').DataTable({
                    processing:true,
		            serverSide:true,
                    ajax: "{{ route('DataTable.data') }}",
                    columns: [
                        {data: 'id',name: 'id'},
                        {data: 'name',name: 'name'},
                        {data: 'email',name: 'email'},
                        // {data: 'action',name: 'action'}
                    ]
                });
            })

                // Ajax form validation in laravel
            $('#validation_form').submit(function(e){
                e.preventDefault();
                // var _token = $("input[name='_token']").val();
                // var username = $('#username').val();
                // var email = $('#email').val();
                // var password = $('#password').val();
                // var formdata= new FormData(this);
                $.ajax({
                    url: "{{ route('FormVaidation.data') }}",
                    type: "POST",
                    // data: {username:username,email:email,password:password,_token:_token},
                    data: $(this).serialize(),
                    success: function(result){
                        // console.log(result);
                        // $('.username_error').html('');
                        // $('.email_error').html('');
                        // $('.password_error').html('');
                        $('.error').text("");
                        if ($.isEmptyObject(result.error)) {
                            alert(result.success);
                            $('#validation_form')[0].reset();
                            // $('.username_error').html('');
                            // $('.email_error').html('');
                            // $('.password_error').html('');
                            $('.error').text("");
                        }else{
                            printErrorMsg(result.error);
                        }
                    }
                })
            })
            function printErrorMsg(msg){
                $('.error').text("");
                $.each(msg, function(key,value){
                    // console.log(key);
                    $('.'+key+'_error').html(value);
                })
            }

                // Increment and show count of download images
            $('.downloader').click(function(){
                var imgid = $(this).attr('data-id');
                $.ajax({
                    url: "{{ route('downloadimage.data') }}",
                    type: "GET",
                    data: {imgid:imgid},
                    success: function(result){
                        // console.log(result);
                        $('.count'+imgid).text(result.imgcount);
                        $('.total_count').text(result.totalcount);
                    }
                })
            })
        })  
    </script>
    
@endsection