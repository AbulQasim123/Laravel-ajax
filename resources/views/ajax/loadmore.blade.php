@extends('ajax.master')
@section('content')
    <style>
        .wrapper>ul#loadmore_results li {
            margin-bottom: 2px;
            background: #e2e2e2;
            padding: 10px;
            list-style: none;
        }

        .loader {
            text-align: center;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            {{-- Resize Image in Laravel --}}
            <div class="col-4">
                <h4 class="text-center">Resize Image in Laravel</h4>
                {{-- @if (count($errors) > 0)
                    <ul style="list-style-type: none">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
                <form action="{{ route('resize.img') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" id="image">
                    <input type="submit" value="Upload" class="btn btn-primary btn-sm">
                </form>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                    <h3>Orignal Image</h3>
                    <img src="/orignalImage/{{ Session::get('imagename') }}" />
                    <h3>Resize Image</h3>
                    <img src="/resizeImage/{{ Session::get('imagename') }}" />
                @endif
            </div>
            {{-- Send OTP on Mobile number --}}
            <div class="col-4">
                <h4 class="text-center">Send OTP on Mobile number </h4>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form id="send_otp">
                    @csrf
                    <label for="mobile_no">Enter your mobile no.</label>
                    <input type="text" name="mobile_no"  id="mobile_no" class="form-control form-control-sm"
                        placeholder="Enter Your Mobile Number">
                        <span class="error mobile_no_error text-danger"></span>
                    {{-- @error('mobile_no')
                        <span class="text-danger">{{ $message }}</span><br>
                    @enderror --}}
                    <input type="submit" value="Send OTP" class="btn btn-primary btn-sm my-2">
                </form>
            </div>
            <div class="col-4">
                <h4 class="text-center">Load More Data using Ajax in Laravel</h4>
                {{-- Load More Data using Ajax in Laravel --}}
                <div class="wrapper">
                    <ul id="loadmore_results"></ul>
                    <div class="loader">
                        <img src="{{ asset('loader/loader.gif') }}" alt="Error" width="30px" width="30px">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{-- OTP Send & OTP Verification from mail --}}
                <form action="{{ route('sendMail.otp') }}" id="sendmail_otp" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email"  value="{{ old('email') }}" id="email" class="form-control" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password"  id="password" class="form-control" placeholder="Enter Password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var url = "";
            var page = 1;
            var isLoading = false; // Track if data is already being loaded
            loadMore(page);
            $(window).scroll(function() {
                if (!isLoading && $(window).scrollTop() + $(window).height() >= $(document).height()) {
                    isLoading = true;
                    $('.loader').show(); // Show the loader immediately
                    setTimeout(function() {
                        page++;
                        // loadMore(page); //  Please unComment for loading more
                        isLoading = false;
                    }, 2000); // Delay of 2 seconds
                }
            });

            function loadMore(page) {
                $.ajax({
                        type: "GET",
                        url: url + '?page=' + page,
                        dataType: "html",
                        beforeSend: function() {
                            $('.loader').show();
                        }
                    })
                    .done(function(data) {
                        if (data.length == 0) {
                            var html = "<h4 style='color:red'>No More Records</h4>";
                            $('.loader').html(html);
                            return;
                        }
                        $('.loader').hide();
                        $('#loadmore_results').append(data);
                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError) {
                        alert('No Response Found');
                    });
            }

            // Send OTP on Mobile number
            $('#send_otp').submit(function(e) {
                e.preventDefault();
                // console.log($(this).serialize());
                $.ajax({
                    url: "{{ route('otp.send') }}",
                    type: "post",
                    data: $(this).serialize(),
                    success: function(result) {
                        console.log(result);
                        $('.error').text("");
                        if ($.isEmptyObject(result.error)) {
                            var userId = result.userId; // Get the user_id from the response
                            console.log(userId);
                            window.location.href = '/otp-verification/' + userId; // Redirect to the OTP verification route with the user_id
                            $('#send_otp')[0].reset();
                            $('.error').text("");
                        } else {
                            printErrorMsg(result.error);
                        }
                    }
                })
            })

            function printErrorMsg(msg) {
                $('.error').text("");
                $.each(msg, function(key, value) {
                    $('.' + key + '_error').html(value);
                })
            }
        });
    </script>
@endsection
