@extends('admin.layout.loginlayout')
@section('content')

{!! Html::style('public/admin/css/materialize.css') !!}

<div id="login-page" class="row">    
    <div class="col s12 z-depth-4 card-panel">
    <form method="post" action="{{ route('postLogin') }}" accept-charset="UTF-8">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <div class="row">
        <div class="input-field col s12 center">
            <img src="{{URL::asset('public/admin/images/maximus-logo.png')}}" alt="" class="responsive-img valign profile-image-login">
            
            <p class="red-text">{{Session()->get('error')}}{{session()->forget('error')}}</p>
        </div>
        </div>
          <p class="center login-form-text">Sign in</p>
       
        <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-5">person_outline</i>
            <input id="email" type="email" autofocus="autofocus"  name="email" required="required">
            <label for="username" class="center-align">Username</label>
        </div>
        </div>
        <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-5">lock_outline</i>
            <input id="password" name="password" autofocus="autofocus"  type="password" required="required">
            <label for="password">Password</label>
        </div>
        </div>
        <?php /*?><div class="row">
        <div class="col s12 m12 l12 ml-2 mt-3">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Remember me</label>
        </div>
        </div><?php */?>
        <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="login_btn btn waves-effect waves-light col s12 ">Login</a></button>
        </div>
        </div>
        <div class="row">
            <!--
        <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a onclick="registration()" style="cursor:pointer" class="green-text">Register Now!</a></p>
        </div> -->
        <div class="input-field col s6 m6 l6">
           <!--  <p class="margin right-align medium-small"><a href="#" class="green-text">Forgot password ?</a></p> -->
        </div>
        </div>
    </form>
    </div>
</div>

<div id="login-page" class="row register" style="display:none">
    <div class="col s12 z-depth-4 card-panel" id="reg">

        <div class="row">
        <div class="input-field col s12 center">
            <img src="{{URL::asset('images/maximus-logo.png')}}" alt="" class="responsive-img valign profile-image-login">
            <p id="msg"></p>
        </div>
        </div>
    <form method="post" name="reg" id="reg" accept-charset="UTF-8">
              <p class="center login-form-text">Register Now</p>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >     
            <div class="row margin">
                <div class="input-field col s6"> <i class="material-icons prefix">account_circle</i>
                    <label for="first_name">First Name</label>
                    <input name="data[User][first_name]" id="first_name"  maxlength="100" type="text">
                </div>
                <div class="input-field col s6"> <i class="material-icons prefix">account_circle</i>
                    <label for="last_name">Last Name</label>
                    <input name="data[User][last_name]" id="last_name" maxlength="100" type="text">
                </div>
            </div>
        <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-5">email</i>
            <input id="emailid" type="email" name="emailid" >
            <label for="email" class="center-align">Email</label>
        </div>
        
        </div>
        <div class="row margin">
        
        <div class="input-field col s12">
        <i class="material-icons prefix">stay_current_portrait</i>
            <label for="mobile" class="">Mobile</label>
            <input name="mobile" id="mobile" type="text" maxlength="10">
        </div>
        </div>
        <!--<div class="row">
        <div class="input-field col s6"> <i class="material-icons prefix">date_range</i>
            <label>Date of Birth</label>
            <input name="data[Student][dob]" id="dob" class="datepicker picker__input" maxlength="100" type="text" readonly tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="telephone_root">
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">stay_current_portrait</i>
            <label for="mobile" class="">Mobile</label>
            <input name="mobile" id="mobile" type="text" maxlength="10">
        </div>
        </div>-->
        
        
        <!--<div class="row ">
        <div class="select_fields col s6">
        
        <input type="radio" name="gender" value="male" id="male" required="">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female" required="">
        <label for="female">Female</label>
        </div>
    </div>-->
    
        
      <!--   <div class="row">
        <div class="input-field col s12">
            <button type="button" class="login_btn btn waves-effect waves-light col s12" onclick="RegisterData()">Register</a></button>
        </div>
        </div> -->
        <div class="row">
        <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a   onclick="login()" style="cursor:pointer" class="blue-text">Login!</a></p>
        </div>
        
        </div>
    </form>




    </div>
</div>
<script>
$(document).ready(function(){

function checkForInput(element) {

  const $label = $(element).siblings('label');

  if ($(element).val().length > 0) {
    $label.addClass('active');
  } else {
    $label.removeClass('active');
  }
}
$('textarea').each(function() {
  checkForInput(this);
});
$('textarea').on('change keyup', function() {
  checkForInput(this);  
});
$('input').each(function() {
  checkForInput(this);
});
$('input').on('change keyup', function() {
  checkForInput(this);  
});
                              
});
</script>

@endsection