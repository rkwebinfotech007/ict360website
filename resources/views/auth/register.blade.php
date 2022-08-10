@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <!-- action="{{ route('register') }} -->
                <div class="card-body">
                    <form method="POST" id="registerForm" onsubmit="return registrationFormSubmit(event)">
                        @csrf

                        <input type="hidden" name="partner_id" value="{{$partner_id}}">

                        <div class="form-group row">
                            <label for="parent_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="parent_name" type="text" class="form-control @error('parent_name') is-invalid @enderror" name="parent_name" value="{{ old('parent_name') }}" required autocomplete="parent_name" autofocus>

                                @error('parent_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('password') is-invalid @enderror" name="phone" required autocomplete="Phone">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_name" class="col-md-4 col-form-label text-md-right">Student Name</label>

                            <div class="col-md-6">
                                <input id="student_name" type="student_name" class="form-control @error('password') is-invalid @enderror" name="student_name" required autocomplete="Student Name">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="age" class="form-control @error('password') is-invalid @enderror" name="age" required autocomplete="Age">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="registerSubmit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function registrationFormSubmit(event)
  {
           
      event.preventDefault();

    //   var parent_name  =  $('#parent_name').val();
    //   var student_name  =  $('#student_name').val();
    //   var email        =  $('#email').val();
    //   var phone        =  $('#phone').val();
    //   var emailpattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    //   var namepatt = /^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;

    //   if(parent_name.length < 3){

    //         $("#parent_name_error").css("display","block");
    //         $("#parent_name_error").html('Please enter correct parent name');
    //         setTimeout(function() {
                    // $('#parent_name_error').fadeOut('fast');
                    //             }, 1000);
                    //     return false;
    //      }
    //      else{
    //        $("#parent_name_error").css("display","none");
    //        $("#parent_name_error").html('');
    //      }

    //     if(student_name.length < 3){

    //         $("#child_name_error").css("display","block");
    //         $("#child_name_error").html('Please enter correct child name');
    //        // $('#child_name_error').fadeOut('fast');
                    //             }, 1000);
                    //     return false;
    //      }
    //      else{
    //        $("#child_name_error").css("display","none");
    //        $("#child_name_error").html('');
    //      } 

    //  if(!namepatt.test(parent_name)){

    //     $("#parent_name_error").css("display","block");
    //     $("#parent_name_error").html('Please enter correct parent name');
    //     // $('#parent_name_error').fadeOut('fast');
                    //             }, 1000);
                    //     return false;
    //  }
    //  else{
    //    $("#parent_name_error").css("display","none");
    //    $("#parent_name_error").html('');
    //  }

    //  if(!namepatt.test(child_name)){

    //     $("#child_name_error").css("display","block");
    //     $("#child_name_error").html('Please enter correct child name');
    //      // $('#child_name').fadeOut('fast');
                    //             }, 1000);
                    //     return false;
    //  }
    //  else{
    //    $("#child_name_error").css("display","none");
    //    $("#child_name_error").html('');
    //  }

      // if(phone.length !=10){

      //        $("#parent_contact_error").css("display","block");
      //       $("#parent_contact_error").html('Please enter correct contact no.');
      //       // $('#parent_contact_error').fadeOut('fast');
                    //             }, 1000);
                    //     return false;
      //    }
      //    else{
      //     $("#parent_contact_error").css("display","none");
      //     $("#parent_contact_error").html('');
      //    }

    //    if(!emailpattern.test(email)){
    //         $("#email_error").css("display","block");
    //         $("#email_error").html('Please enter correct email.'); 
    //         // $('#email_error').fadeOut('fast');
                    //             }, 1000);
                    //     return false;
    //      }
    //      else{
    //         $("#email_error").css("display","none");
    //        $("#email_error").html('');
    //      }
         
       var formdata = $('#registerForm').serialize();
       console.log(formdata);
       //var request_url = $('#')
       var _token  = "{{ csrf_token() }}"; 
      
                    $('#registerSubmit').html('Please Wait..');
                    $("#registerSubmit").attr("disabled", true);
                    $.ajax({
                        type: "POST",
                        url: '{{ route('saveUser') }}', 
                        data: formdata,//{formdata,_token:_token},
                    }).done(function( msg ) {
                    var data = JSON.parse(msg);
                    // alert(data);
                      if(data == "success"){
                        swal({
                              title: 'Success!',
                              text: 'Request Submitted Successfully!',
                              type: 'success'
                            },function(){
                              $('#registerSubmit').html('Submit');
                              $('#registerForm')[0].reset();
                              
                            });
                      }else{
                         swal({
                              title: 'Fail!',
                              text: data,
                              type: "warning"
                            },function(){
                              $('#registerSubmit').html('Submit');
                              $("#registerSubmit").attr("disabled", false);
                            });
                      }
                });
        
    }
       
</script>
@endsection
