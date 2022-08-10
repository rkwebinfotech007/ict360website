<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no"> 
    <title>MBX-ICT Admin</title>
    <!-- Favicons-->

<link rel="icon" href="{{asset('public/images/fav-icon.png')}}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="{{asset('public/images/fav-icon.png')}}">
<!-- For iPhone -->
<meta name="msapplication-TileColor" content="#00bcd4">
 <link href="{{asset('public/images/fav-icon.png')}}" rel="icon" type="image/x-icon" />
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    
    {!! Html::style('public/admin/css/materialize.css') !!}  
    {!! Html::style('public/admin/css/style.css') !!}   
    {!! Html::style('public/admin/css/materialize-horizontal.css') !!}
    {!! Html::style('public/admin/css/custom.css') !!}
    
    <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/materialize-horizontal.css" />
    <link href="css/custom.css" type="text/css" rel="stylesheet"> -->
 
    
  </head>
  <body class="cyan" style="background:#000 !important; display:table-cell">
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="" class="fullscreen-bg__video">
            <source src="../public/media/MindBox-Evolving-Education.mp4" type="video/mp4">
        </video>
    </div>
    <!-- Start Page Loading -->
    <!-- <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div> -->
    <!-- End Page Loading -->
    @yield('content')

   
    <!-- ================================================
    Scripts
    ================================================ -->
    {!! Html::script('public/admin/js/jquery-3.2.1.min.js') !!}
    {!! Html::script('public/admin/js/materialize.min.js') !!}
    {!! Html::script('public/admin/js/jquery.sparkline.min.js') !!}

    

 <script>
    function  registration()
       {  
          $("#login-page").hide();
          $(".register").show();
       }

    function  login()
       { 
          
          $(".register").hide();
          $("#login-page").show();
       }
function RegisterData()
  { 
    first_name=$("#first_name").val();
    last_name=$("#last_name").val();
    emailid=$("#emailid").val(); 
     mobile=$("#mobile").val();
    if(first_name=="")
    {
      alert("Please Enter First Name");
      return  false;
    }
    if(last_name=="")
    {
      alert("Please Enter Last Name ");
      return  false;
    }
    
    if(emailid=="")
    {   
      alert("Please Enter Email Id");
      return  false;
    }
   
    if(mobile=="")
    {
      alert("Please Enter Mobile Number");
      return  false;
    }
  
}


</script>
      <script>
 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false, // Close upon selecting a date,
    container: undefined // ex. 'body' will append picker to body
  });
  
$(function() {
    $('.modal').modal();
  }); 
 
  $("#addstudent").click(function() {
        $('#mydiv').modal('open');
 });
</script> 
  </body>
</html>