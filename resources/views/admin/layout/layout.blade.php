<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="msapplication-tap-highlight" content="no">
<title>MBX-ICT</title>
<!-- Favicons-->
<link rel="icon" href="{{asset('public/images/fav-icon.png')}}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="{{asset('public/images/fav-icon.png')}}">
<!-- For iPhone -->
<meta name="msapplication-TileColor" content="#00bcd4">
 <link href="{{asset('public/images/fav-icon.png')}}" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- For Windows Phone -->

    {!! Html::style('public/admin/css/materialize1.css') !!}
    {!! Html::style('public/admin/css/style1.css') !!}
	{!! Html::style('public/admin/css/custom.css') !!}
	<!--{!! Html::style('public/admin/css/style-horizontal.css') !!}-->
	{!! Html::style('public/admin/css/jquery-jvectormap.css') !!}
	{!! Html::style('public/admin/css/flag-icon.min.css') !!}
	{!! Html::style('public/admin/css/sweetalert.css') !!}
	{!! Html::style('public/admin/css/jquery.ui.timepicker.css') !!}
	{!! Html::style('public/admin/css/jquery-ui-custom-ark.css') !!}
	{!! Html::style('public/admin/css/ui.jqgrid.css') !!}
    {!! Html::style('public/admin/css/font-awesome.min.css') !!}
              
	{!! Html::script('public/admin/js/jquery-3.2.1.min.js') !!}
	<!-- <script src="{{ asset('public/admin/js/jquery-3.0.0.min.js') }}"></script> -->
	{!! Html::script('public/admin/js/materialize.min.js') !!}
      {!! Html::script('public/admin/js/moment.min.js') !!}
     {!! Html::script('public/admin/js/daterangepicker.js') !!}
	{!! Html::script('public/admin/js/grid.locale-en.js') !!}
	{!! Html::script('public/admin/js/jquery.jqGrid.min.js') !!}
	{!! Html::script('public/admin/js/perfect-scrollbar.min.js') !!}
	{!! Html::script('public/admin/js/chart.min.js') !!}
	{!! Html::script('public/admin/js/jquery.sparkline.min.js') !!}
	{!! Html::script('public/admin/js/jquery-jvectormap-1.2.2.min.js') !!}
	<!-- {!! Html::script('/js/vectormap-script.js') !!} -->
	{!! Html::script('public/admin/js/plugins.js') !!}
	<!-- {!! Html::script('/js/dashboard-analytics.js') !!} -->
	{!! Html::script('public/admin/js/custom-script.js') !!}
	<!-- {!! Html::script('/js/jquery.roundabout.js') !!} -->
	<!-- {!! Html::script('/js/jquery.validate.js') !!} -->
	<!-- {!! Html::script('/js/manage_validation.js') !!} -->
	{!! Html::script('public/admin/js/jquery.ui.timepicker.js') !!}
	<!-- {!! Html::script('/js/validation.js') !!} -->
	{!! Html::script('public/admin/js/jquery.ajax.js') !!}
	<!--{!! Html::script('/js/app.js') !!} 
	 {!! Html::script('/js/file-validator.js') !!} -->
	{!! Html::script('public/admin/js/date_time.js') !!}
	{!! Html::script('public/admin/js/sweetalert.min.js') !!}
	<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
	{!! Html::script('public/admin/js/extra-components-sweetalert.js') !!}
	{!! Html::script('public/admin/js/jquery-ui.custom.min.js') !!}
	{!! Html::script('public/admin/js/jquery.floatThead.min.js') !!}
	{!! Html::script('public/admin/js/jquery.floatThead-slim.min.js') !!}
	{!! Html::script('public/admin/js/jquery-ui.custom.min.js') !!}
	{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek') !!}
	{!! Html::script('public/admin/js/jszip.min.js') !!}
	{!! Html::script('public/admin/js/constant_path.js') !!}
	<!-- {!! Html::script('/js/custom.js') !!} -->
	{!! Html::script('public/admin/js/controllerCall.js') !!}
	<!-- {!! Html::script('public/admin/js/postAssessment.js') !!} -->
	{!! Html::script('public/admin/graphs/code/js/highchart1.js') !!}
    {!! Html::script('public/admin/js/jquery.slimscroll.js') !!}
    {!! Html::script('public/admin/js/mindmup-editabletable.js') !!}
    {!! Html::script('public/admin/js/jquery.marquee.js') !!}
    <!--  {!! Html::script('public/admin/js/jquery.countdownTimer.js') !!} -->
	 <link href ="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.1/js/froala_editor.pkgd.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.0.6/js/plugins/file.min.js"></script>

    
   </head>
   <body class="layout-semi-dark">
   		@include('admin.layout.header')  

   <div id="main">
		<div class="wrapper">
        
        
              <!-- START LEFT SIDEBAR NAV-->
		        <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">
		          <div class="brand-sidebar">
		            <h1 class="logo-wrapper">
		              <a href="#" class="brand-logo darken-1">
		                <img src="{{URL::asset('public/admin/images/maximus-logo.png')}}" alt="materialize logo">
		                
		              </a>
		           
		            </h1>
		          </div>
		          <ul id="slide-out" class="side-nav fixed leftside-navigation">
		          
		      		@include('admin.layout.lowerHeader')

		    		</ul>
		          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
		            <i class="material-icons">menu</i>
		          </a>
		        </aside>
         
      
    
				 <div id="he_id"> 
		     				@yield('content')
				 </div>
		 		</div>
            </div>
         @include('admin.layout.footer')
        
          
		<script>


	$(function() {
		$('table.demo2').floatThead({
			position: 'fixed',
			scrollingTop: 65
		  });
		  $('table.demo2 thead').css('background', '#ECEFF1');
		});
		$(function(){
	    $('.ui-jqgrid-bdiv').slimScroll({
	       height: '250px'
	    });

	
		});
		</script>

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
<input id="public_path" name="public_path" type="hidden" value="{{public_path()}}">
<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" >
 <div id="caldiv" class="modal  modal-fixed-footer modal-fixed-header"></div>
  <div id="schedule_all" class="modal  modal-fixed-footer modal-fixed-header"></div>
 <div id="mydiv" class="modal  modal-fixed-footer modal-fixed-header"></div>
 <div id="xsmall" class="modal  modal-fixed-footer modal-fixed-header"></div>
 <div id="xsmall_question" class="modal  modal-fixed-footer modal-fixed-header"></div>
<div id="gridLib" ></div>
	</body>
</html>
