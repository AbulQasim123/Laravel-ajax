<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <p id="message_error" class="text-danger"></p>
            <p id="message_success" class="text-success"></p>
            @if (Session::has('success'))
                <p class="text-success">{{ Session::get('success') }}</p>
            @endif
            <form method="post" id="verificationForm">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="number" name="otp" placeholder="Enter OTP" required class="form-control">
                <input type="submit" value="Verify" class="btn btn-primary btn-sm my-2">
            </form>
            <p class="time"></p>
            <button id="resendOtpVerification" class="btn btn-secondary btn-sm">Resend Verification OTP</button>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
        // Verification OTP
        $('#verificationForm').submit(function (e) { 
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "{{ route('verified.Otp') }}",
                data: formData,
                success: function (response) {
                    if(response.status == true){
                        alert(response.msg)
                        window.open("{{ route('load.login') }}" ,"_self");
                    }else{
                        $('#message_error').text(response.msg);
                        setTimeout(() => {
                            $('#message_error').text('');
                        }, 3000);
                    }
                }
            });
        });
        // Resend OTP
        $('#resendOtpVerification').click(function () { 
            $(this).text('Please Wait...');
            var userEmail = @json($email);
            $.ajax({
                type: "GET",
                url: "{{ route('resend.Otp') }}",
                data: {email: userEmail},
                success: function (response) {
                    $('#resendOtpVerification').text('Resend Verification OTP');
                    if(response.status == true){
                        timer();
                        $('#message_success').text(response.msg);
                        setTimeout(() => {
                            $('#message_success').text('');
                        }, 3000);
                    }else{
                        $('#message_error').text(response.msg);
                        setTimeout(() => {
                            $('#message_error').text('');
                        }, 3000);
                    }
                }
            });
        });
    });

    function timer() {
        var seconds = 30;
        var minutes = 1;
        
        var timer = setInterval(() => {
            if (minutes < 0) {
                $('.time').text('');
                clearInterval(timer);
            }else{
                let tempMinutes = minutes.toString().length > 1? minutes:'0'+minutes;
                let tempSeconds = seconds.toString().length > 1? seconds:'0'+seconds;
                $('.time').text(tempMinutes+':'+tempSeconds);
            }
            if(seconds <= 0){
                minutes--;
                seconds = 59;
            }
            seconds--;
        }, 1000);

    }
    timer();
</script>
