//Function to get dyanmic list of Level option value from selected Program dropdown
function get_level_program(prog_id,level_id,actionurl)
{
	$("#ajax_loader_level").css("display", "block");
	if(prog_id != 'null')
	{
		$.ajax({
					 type: "POST",
					 url: actionurl,
					 data: 'prog_id='+ prog_id +'&level_id=' + level_id,
					 success: function(data) 
					 {
						 //alert(data);
						 $('#level_dropdown').empty();
						 $('#level_dropdown').html(data);
						 $("#ajax_loader_level").css("display", "none");
					 }
				});
									
		
	}
	else
	{
			$('#level_dropdown').html("<option value=''>Select Level</option>");
			$("#ajax_loader_level").css("display", "none");

	}
	
}



function get_school_batch(school_id,batch_id,actionurl,setlogby)
{
	$("#ajax_loader_batch").css("display", "block");
	//setlogby = '';
	var logby;
	if(setlogby)
	{
		logby = setlogby;
	}
	else
	{
		logby='';
	}
	if(school_id !='null'){
	   		$.ajax({
			type:"POST",
			url:actionurl,
			data:'school_id='+ school_id +'&batch_id='+ batch_id+'&logby='+logby,
			success:function(data){
				$('#batch_dropdown').empty();
				$('#batch_dropdown').html(data);
				$("#ajax_loader_batch").css("display", "none");
				}
	});
	}else{
		$('#batch_dropdown').html("<option value=''>Select Batch</option>");
	}
}

function get_school_batch_active(school_id,batch_id,actionurl,setlogby)
{
	$("#ajax_loader_batch").css("display", "block");
	//setlogby = '';
	var logby;
	if(setlogby)
	{
		logby = setlogby;
	}
	else
	{
		logby='';
	}
	if(school_id !='null'){
	   		$.ajax({
			type:"POST",
			url:actionurl,
			data:'school_id='+ school_id +'&batch_id='+ batch_id+'&logby='+logby,
			success:function(data){
				$('#batch_dropdown').empty();
				$('#batch_dropdown').html(data);
				$("#ajax_loader_batch").css("display", "none");
				}
	});
	}else{
		$('#batch_dropdown').html("<option value=''>Select Batch</option>");
	}
}

function get_school_batch_multiple(school_id,batch_id,actionurl,setlogby)
{
	$("#ajax_loader_batch").css("display", "block");
	//setlogby = '';
	var logby;
	if(setlogby)
	{
		logby = setlogby;
	}
	else
	{
		logby='';
	}
	if(school_id !='null'){
	   		$.ajax({
			type:"POST",
			url:actionurl,
			data:'school_id='+ school_id +'&batch_id='+ batch_id+'&logby='+logby,
			success:function(data){
				$('#batch_dropdown').empty();
				$('#batch_dropdown').html(data);
				$("#ajax_loader_batch").css("display", "none");
				}
	});
	}else{
		$('#batch_dropdown').html("<option value=''>Select Batch</option>");
	}
}

function get_faculty1_region_multiple(region_id,faculty_id,actionurl)
{
	$("#ajax_loader_faculty1").css("display", "block");
	if(region_id !='null')
	{
		$.ajax({
			type:"POST",
			url:actionurl,
			data:'region_id='+ region_id +'&faculty_id='+ faculty_id,
			success:function(data)
			{
				//alert(data);
				$('#faculty_1').empty();
				$('#faculty_1').html(data);
				$("#ajax_loader_faculty1").css("display", "none");	
			}
		});
	}
	else
	{
		$('#faculty_1').html("<option value=''>Select Faculty</option>");
	}
}


	function get_batch_info(id , mode , actionurl,carry)
	{
	 
		if(id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'id='+ id +'&mode='+mode +'&carry='+carry,
				success:function(data){
					//alert(data);
					$('#dynamic_value_batch').empty();
					$('#dynamic_value_batch').html(data);
					
					}
		});
		}/*else{
		$('#dynamic_value_batch').html("<option value=''>Select Batch</option>");
			}*/

	}
	
	
	 
	
	//////////////////////////////////////////////////////////////////////
	function get_batch_info_multiple(scheme_id , mode , actionurl)
	{
		
		var program_id=$('#BatchProgramId').val();
		var level_id=$('#level_dropdown').val(); 
	 	if(level_id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'scheme_id='+ scheme_id +'&program_id='+program_id+'&level_id='+level_id,
				success:function(data){
					//alert(data);
					$('#dynamic_value_batch').empty();
					$('#dynamic_value_batch').html(data);
					}
		});
		}
	}
	
	function fill_batch_data(id,actionurl)
	{
    if(id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'batch_id='+ id ,
				success:function(data){
					
					alert(data);

				 }
		});
		}
		
	}
	
	
	function get_batch_info2(id,actionurl,carry)
	{
		 
		if(id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'school_id='+ id +'&carry='+carry,
				success:function(data){
				 
					$('#batch_id').empty();
					$('#batch_id').html(data);
					}
		});
		}/*else{
		$('#dynamic_value_batch').html("<option value=''>Select Batch</option>");
			}*/

	}
	
	
	
	
	
	
	
	
	
	
	
	
		
	function get_batch_info1(id,actionurl)
	{
		if(id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'id='+ id ,
				success:function(data){
					//alert(data);
					$('#dynamic_value_batch').empty();
					$('#dynamic_value_batch').html(data);
					}
		});
		}/*else{
		$('#dynamic_value_batch').html("<option value=''>Select Batch</option>");
			}*/

	}

	function get_batch_info_record(batch_id, actionurl)
	{
		if(batch_id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'batch_id='+ batch_id,
				success:function(data){
					//alert(data);
					$('#dynamic_value_batch').empty();
					$('#dynamic_value_batch').html(data);
					}
		});
		}else{
		$('#dynamic_value_batch').html("<option value=''>Select Batch</option>");
			}
		
	}
	

	function get_batch_date(batch_id, actionurl)
	{		//var monday,tuesday,wednesday,thursday,friday,saturday,sunday;
		
		if(batch_id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'batch_id='+ batch_id,
				success:function(data){
					$('#dynamic_batch_date').empty();
					$('#dynamic_batch_date').html(data);
					var all_batch_date = $('#all_batch_date').val();
					var all_batch_date1 = all_batch_date.split(",");
					var enabledDays = [];
					for(k = 0; k < all_batch_date1.length; k++)
					{
						enabledDays.push(all_batch_date1[k].toString());
					}
					
					function enableAllTheseDays(date)
					{
						var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
						for (i = 0; i < enabledDays.length; i++) {
							if($.inArray((m+1) + '-' + d + '-' + y,enabledDays) != -1) {
								return [true];
							}
						}
						return [false];
					}
					$('#batch_date').datepicker({
							dateFormat: 'yy-mm-dd',
							beforeShowDay: enableAllTheseDays
					});
				}
		});
		}
		
	
	}

	
	
	function get_batch_info_completion(batch_id, actionurl)
	{
		if(batch_id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'batch_id='+ batch_id,
				success:function(data){
					//alert(data);
					$('#dynamic_value_batch').empty();
					$('#dynamic_value_batch').html(data);
					}
		});
		}else{
		$('#dynamic_value_batch').html("<option value=''>Select Batch</option>");
			}
		
	}
	
	function get_lesson_id(lesson_id, actionurl)
	{
		if(lesson_id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl,
				data:'lesson_id='+ lesson_id,
				success:function(data){
					//alert(data);
					$('#lesson_dropdown').empty();
					$('#lesson_dropdown').html(data);
					}
		});
		}else{
		$('#lesson_dropdown').html("<option value=''>Select Lesson</option>");
			}
		
	}
function get_program_lessons(program_id, scheme_id , actionurl)
	{
		//$("#ajax_loader_scheme").css("display", "block");
		 
		if(program_id != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'program_id='+ program_id,
						 success: function(data) 
						 {
							 //alert(data);
							 $('#availableItems').empty();
							 $('#availableItems').html(data);
							  //$("#ajax_loader_scheme").css("display", "none");
						 }
					});
			 
			
		}
		
	}



	function get_scheme_level(level_id, scheme_id , actionurl)
	{
		$("#ajax_loader_scheme").css("display", "block");
		if(level_id != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'level_id='+ level_id +'&scheme_id=' + scheme_id,
						 success: function(data) 
						 {
							 // alert(data);
							 $('#scheme_dropdown').empty();
							 $('#scheme_dropdown').html(data);
							  $("#ajax_loader_scheme").css("display", "none");
						 }
					});
										
			
		}
		else
		{
				$('#scheme_dropdown').html("<option value=''>Select Scheme</option>");
	
		}
		
	}


	function get_region_school(region_id,school_id,actionUrl){
		
		//alert(region_id);
		$("#ajax_loader_school").css("display", "block");
		if(region_id !='null'){
			$.ajax({
				type:"POST",
				url:actionUrl,
				data:'region_id='+ region_id +'&school_id='+ school_id,
				success:function(data){
				//	alert(data);
					$('#school_dropdown').empty();
					$('#school_dropdown').html(data);
					 $("#ajax_loader_school").css("display", "none");
					}
		});
		}else{
			$('#school_dropdown').html("<option value=''>Select School</option>");
		}
	}
	
	function get_region_mobile(region_id,faculty_id,actionUrl){
		
		$("#ajax_loader_school").css("display", "block");
		if(region_id !='null'){
			$.ajax({
				type:"POST",
				url:actionUrl,
				data:'region_id='+ region_id +'&faculty_id='+ faculty_id,
				success:function(data){
					//alert(data);
					$('#faculty_dropdown').empty();
					$('#faculty_dropdown').html(data);
					 $("#ajax_loader_school").css("display", "none");
					}
		});
		}else{
			$('#faculty_dropdown').html("<option value=''>Select Faculty</option>");
		}
	}


	function get_faculty1_region(region_id,faculty_id,actionurl){
		$("#ajax_loader_faculty1").css("display", "block");
		if(region_id !='null'){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'region_id='+ region_id +'&faculty_id='+ faculty_id,
				success:function(data){
					//alert(data);
					$('#faculty_1').empty();
					$('#faculty_1').html(data);
					$("#ajax_loader_faculty1").css("display", "none");
					}
		});
		}else{
			$('#faculty_1').html("<option value=''>Select Faculty</option>");
		}
	}
	
	
	function get_faculty2_region(region_id,faculty_id,actionurl){
		$("#ajax_loader_faculty2").css("display", "block");
		if(region_id !='null'){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'region_id='+ region_id +'&faculty_id='+ faculty_id,
				success:function(data){
					//alert(data);
					$('#faculty_2').empty();
					$('#faculty_2').html(data);
					$("#ajax_loader_faculty2").css("display", "none");
					}
		});
		}else{
				$('#faculty_2').html("<option value=''>Select Faculty</option>");
		}
	}
	
	
	function get_faculty_region_asset(region_id,role_name,faculty_id,actionurl,count){
		
		
		if(region_id !=''){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'region_id='+ region_id +'&role_name='+ role_name+'&faculty_id='+ faculty_id,
				cache:false,
				success:function(data){
					//alert(data);
					
					for(var i=0 ; i<count; i++)
					{
						$('select#faculty_'+i).empty();
						$('select#faculty_'+i).html(data);
					}
				}
		});
		}else{
					for(var i=0 ; i<count; i++)
					{
						$('select#faculty_'+i).html("<option value=''>Select Faculty</option>");
					}
		}
	}
	
	
	 
	
	
	function get_faculty2_region_asset(region_id,role_name,faculty_id,actionurl,count){
		
		
		if(region_id !=''){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'region_id='+ region_id +'&role_name='+ role_name+'&faculty_id='+ faculty_id,
				cache:false,
				success:function(data){
					//alert(data);
					
					for(var i=0 ; i<count; i++)
					{
						$('select#faculty_'+i).empty();
						$('select#faculty_'+i).html(data);
					}
				}
		});
		}else{
					for(var i=0 ; i<count; i++)
					{
						$('select#faculty_'+i).html("<option value=''>Select Faculty</option>");
					}
		}
	}
		function get_school_region_asset(region_id,actionurl,count){
		
		
		if(region_id !=''){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'region_id='+ region_id,
				cache:false,
				success:function(data){
					//alert(data);
					
					for(var i=0 ; i<count; i++)
					{
						$('select#school_'+i).empty();
						$('select#school_'+i).html(data);
					}
				}
		});
		}else{
					for(var i=0 ; i<count; i++)
					{
						$('select#school_'+i).html("<option value=''>Select School</option>");
					}
		}
	}
	
	
	

	function get_level_engagement(scheme_id,engagement_id,school_id,actionurl){
		
		$("#ajax_loader_engagement").css("display", "block");
		if(school_id !='null'){
			if(school_id=='')
			var school_id = $('#school_dropdown').val();
		else
			var school_id = school_id;
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'school_id='+ school_id +'&scheme_id='+ scheme_id +'&engagement_id='+ engagement_id,
				success:function(data){
					//alert(data);
					$('#engagement_dropdown').empty();
					$('#engagement_dropdown').html(data);
					$("#ajax_loader_engagement").css("display", "none");
					}
		});
		}else{
			$('#engagement_dropdown').html("<option value=''>Select Engagements</option>");
		}
	}
	
	function get_scheme_weekdays(scheme_id,actionurl){
		if(scheme_id !='null'){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'scheme_id='+ scheme_id,
				success:function(data)
						{
							$('#dynamic_weekdays').html(data);
						}
					});
			}
	}
	
	function get_scheme_details(scheme_id,actionurl){
		if(scheme_id !='null'){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'scheme_id='+ scheme_id,
				success:function(data)
						{
							$('#dynamic_details').html(data);
						}
					});
			}
	}
	
	
	
	function get_enddate(start_date,frequency,number_of_session,is_Monday,is_Tuesday,is_Wednesday,is_Thursday,is_Friday,is_Saturday,is_Sunday,week_days,actionurl)
	{
		if(start_date != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data:'start_date='+ start_date +'&frequency=' + frequency+'&number_of_session='+number_of_session+'&is_Monday='+is_Monday+'&is_Tuesday='+is_Tuesday+'&is_Wednesday='+is_Wednesday+'&is_Thursday='+is_Thursday+'&is_Friday='+is_Friday+'&is_Saturday='+is_Saturday+'&is_Sunday='+is_Sunday+'&+week_days='+week_days,
                                                 //data: 'mydata='+mydata+'&+week_days='+week_days,                                             
                                                 //data: 'start_date='+ start_date +'&frequency=' + frequency+'&number_of_session='+number_of_session+'&+week_days='+week_days,

						 success: function(data) 
						 {
							$('.end_date').val(data);
						 }
					});
										
			
		}
		else
		{
				$('.end_date').val("");
	
		}
	
	
 	}
 
	
	function get_endtime(start_time,duration,actionurl)
	{
			if(start_time != '')
			{
				$.ajax({
							 type: "POST",
							 url: actionurl,
							 data:'start_time='+start_time+'&duration='+duration,
							 success: function(data) 
							 {
								$('.end_time').val(data);
							 }
						});
			}
			else
			{
					$('.end_time').val("");
		
			}
	}
	
	function check_reschedule_overlap(start_time,duration,batch_date,primary_faculty,actionurl)
	{
			if(start_time != '')
			{
				$.ajax({
							 type: "POST",
							 url: actionurl,
							 data:'start_time='+start_time+'&duration='+duration+'&batch_date='+batch_date+'&primary_faculty='+primary_faculty,
							 success: function(data) 
							 {
								if(data == 2)
								{	
									alert('This Batch cannot be resheduled at the Selected Date and Time');
									$('#start_time').val("");
									$('.end_time').val("");
								}
							 }
						});
			}
			
	}
	
	
	function get_scheme_level_school(level_id,scheme_id,school_id,actionurl)
	{
		$("#ajax_loader_scheme_level_school").css("display", "block");
		if(level_id !='null'){
			if(school_id=='')
				var school_id = $('#school_dropdown').val();
			else
				var school_id = school_id;
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'level_id='+ level_id +'&scheme_id='+ scheme_id + '&school_id='+school_id,
				success:function(data){
				//alert(data);
					$('#scheme_dropdown').empty();
					$('#scheme_dropdown').html(data);
					$("#ajax_loader_scheme_level_school").css("display", "none");
					}
		});
		}else{
			$('#scheme_dropdown').html("<option value=''>Select Schemes</option>");
		}
	}


	function get_school_student(school_id,id,action_url,bid)
	{
		if(school_id !='null'){
			$('#search_school_id').val(school_id);
		   $.ajax({
				type:"POST",
				  url:action_url,
				data:'school_id='+ school_id +'&id='+ id+'&bid='+bid,
				success:function(data){
			  
					$('#box1View').empty();
					
					if(bid == undefined){
					$('#box2View').empty();
					}
					$('#box1View').html(data);
					}
		});
		}
	
	}

	function get_student_search(action_url)
	{
		school_id = $('#search_school_id').val();
		student_name = $('#student_name').val();
		student_class = $('#student_class').val();
		date_from = $('#date_from').val();
		date_to = $('#date_to').val();
					
		if(school_id !='null'){
		    $.ajax({
			type:"POST",
			url:action_url,
			data:'school_id='+school_id+'&name='+student_name+'&class='+student_class+'&date_from='+date_from+'&date_to='+date_to,
	        success:function(data){
		  		$('#box1View').empty();
				$('#box1View').html(data);
				}
		});
		}
	}


	function check_unique_email(email,action_url,set_email)
	{
		if(email != ''){
	    $.ajax({
			type:"POST",
			url:action_url,
			data:'email='+ email +'&set_email='+set_email ,
	        success:function(data){
					//alert(data);
					
					if(data == 1)
					{
						document.getElementById('email_unique_error').style.display = 'block';
						document.getElementById('email_address').focus();
						$('#email_address').val(set_email);
						$('#email_unique_error').html(email + ' email already exsist.');
						return false;
					}
					if(data == 2)
					{
						document.getElementById('email_unique_error').style.display = 'none';
						return true;
					}
										
				}
			});
		}
	
	}
	
	
	
	function get_batch_info_alloc(id,actionurl1,faculty_id,actionurl2)
	{
		faculty_id = '';
		if(id !='null'){
				$.ajax({
				type:"POST",
				url:actionurl1,
				data:'id='+ id ,
				success:function(data)
					{
						$('#dynamic_value_batch').empty();
						$('#dynamic_value_batch').html(data);
					}
		});
		}/*else{
		$('#dynamic_value_batch').html("<option value=''>Select Batch</option>");
			}*/

	}
	
	/*Function to fetch the faculty list without overlapping on the time schedule*/
	
	function get_overlap_alloc(id,faculty_id,type,actionurl)
	{
		if(type == 'primary')
		{
			$("#ajax_loader_faculty1").css("display", "block");
		}
		if(type == 'secondary')
		{
			$("#ajax_loader_faculty2").css("display", "block");
		}
		
		
		var faculty_1 = $('#faculty_1').val();
		var faculty_2 = $('#faculty_2').val();
		var	region_id = $('#region_id_alloc').val();
		var	batch_start_date = $('#start_date').val();
		var	batch_end_date = $('#end_date').val();
		var	batch_start_time = $('#start_time').val();
		var	batch_end_time = $('#end_time').val();
		var	weekday = $('#weekday').val();
		
		//alert(batch_start_date+batch_end_date+batch_start_time+batch_end_time);
		
		if(region_id !='null'){
			$.ajax({
				type:"POST",
				url:actionurl,
				data:'id='+ id +'&faculty_id='+ faculty_id+'&batch_start_date='+batch_start_date+'&batch_end_date='+batch_end_date+'&batch_start_time='+batch_start_time+'&batch_end_time='+batch_end_time+'&weekday='+weekday,
				success:function(data){
					
					
					 
					if(data)
					{
						if(type == 'primary')
						{
							alert(data);
							$('#faculty_1').removeAttr('selected').find('option:first').attr('selected', 'selected');
							
						}
						if(type == 'secondary')
						{
							alert('Selected Secondary Faculty allocated as Primary Faculty to another batch at the time selected');
						}
					}
					
					if(faculty_1 == faculty_2)
					{
						alert('Both Primary Faculty and Secondary Faculty are same.');	
					}
					
					if(type == 'primary')
					{
						$("#ajax_loader_faculty1").css("display", "none");	
					}
					if(type == 'secondary')
					{
						$("#ajax_loader_faculty2").css("display", "none");
						
					}		
			}
		});
		}else{
			$('#faculty_1').html("<option value=''>Select Faculty</option>");
		}
	}
	
	function check_unique_pannumber(pannumber,action_url,set_pannumber)
	{
		if(pannumber !='null'){
	    $.ajax({
			type:"POST",
			url:action_url,
			data:'pannumber='+ pannumber +'&set_pannumber='+set_pannumber ,
	        success:function(data){
					//alert(data);
					if(data == 1)
					{
						document.getElementById('pannumber_unique_error').style.display = 'block';
						document.getElementById('pan_number').focus();
						$('#pan_number').val(set_pannumber);
						$('#pannumber_unique_error').html(pannumber + ' PAN No. already exsist.');
						return false;
					}
					if(data == 2)
					{
						document.getElementById('pannumber_unique_error').style.display = 'none';
						return true;
					}
					
				}
			});
		}
	
	}

/* Get User password Start */	
function get_show_user(str,abc,actionurl){
	//alert(actionurl);
	$.ajax({
        type:"POST",
        url:actionurl,
        data:'curr_pass='+str,
        success:function(data){
		// replacer id here
		//alert(data)
		var d= data;

		if(d=='0'){
			$('#usersCurrPass1').html('Old password do not match in database.');
			$('#usersCurrPass1').css('display','block');
			$('#usersCurrPass1').addClass('error');
			$('#usersCurrPass').focus();
			return false;
		}
		if(d=='1'){
			$('#usersCurrPass1').css('display','none');
			$('#usersCurrPass1').removeClass('error');
		
		}
		 
		},		
	error: function(XMLHttpRequest, textStatus, errorThrown) { 
			$('#usersCurrPass1').css('display','block');
			$('#usersCurrPass1').addClass('error');
			return false;
	    }       
		});
	
	
	
}
/* Get User password End */	

/* function to get faculty schedule */

 

function get_faculty_schedule(searchdate,actionurl,imgurl,search){

//alert(searchdate);

var processingimg = '<div style="text-align:center;"><img src="'+imgurl+'img/image_processing.jpg"></div>';
$('#facultyScheduleView').html(processingimg).delay(2000);

if(search!='')
{
	var faculty = $('#facultyID').val();
	var regionID = $('#regionID').val();
	var school_dropdown = $('#school_dropdown').val();
	var batch_dropdown = $('#batch_dropdown').val();
	var searchdate = $('#searchvalue').val(); 
	var viewType = $('#viewType').val();
	var StudentSelectMonth = $('#StudentSelectMonth').val(); 
	var StudentSelectYear = $('#StudentSelectYear').val(); 
}

if(searchdate !='null'){
   $.ajax({
	type:"POST",
	url:actionurl,
	data:'searchdate='+ searchdate+'&faculty="'+faculty+'"&regionID='+regionID+'&school_dropdown='+school_dropdown+'&batch_dropdown='+batch_dropdown+'&StudentSelectMonth='+StudentSelectMonth+'&StudentSelectYear='+StudentSelectYear+'&viewType='+viewType,
success:function(data)
	{
		$('#facultyScheduleView').empty();
		$('#facultyScheduleView').html(data);
	}
	});
}
}

function reload_jcarousel_month(month,year,action_url)
{
	if(month == '')
	{
		month = $('#StudentSelectMonth').val(); 	
	}
	if(year == '')
	{
		year = $('#StudentSelectYear').val(); 	
	}
	if(month != ''){
	   $.ajax({
			type:"POST",
			url:action_url,
			data:'selected_month='+ month+'&selected_year='+year,
	        success:function(data){
		  
				$('#dynamic_month').empty();
				$('#dynamic_month').html(data);
				$('#mycarousel').jcarousel();
				// get_faculty_schedule('<?php echo date("Y-m-d"); ?>', '<?php echo BaseURL.'Faculties/get_faculty_schedule'; ?>' , '<?php echo  $this->webroot;?>','search' ); 
				}
	});
	}

}

function reload_jcarousel_month_admin(month,year,action_url)
{
	if(month == '')
	{
		month = $('#StudentSelectMonth').val(); 	
	}
	if(year == '')
	{
		year = $('#StudentSelectYear').val(); 	
	}
	if(month != ''){
	   $.ajax({
			type:"POST",
			url:action_url,
			data:'selected_month='+ month+'&selected_year='+year,
	        success:function(data){
		  
				$('#dynamic_month').empty();
				$('#dynamic_month').html(data);
				$('#mycarousel').jcarousel();
				// get_faculty_schedule('<?php echo date("Y-m-d"); ?>', '<?php echo BaseURL.'Faculties/get_faculty_schedule'; ?>' , '<?php echo  $this->webroot;?>','search' ); 
				}
	});
	}

}

/* Function to get Batch schedule for students */
function get_batch_schedule(searchdate,actionurl,imgurl,search){
	

	if(search!='')
	{
		var batch_dropdown = $('#batch_dropdown').val();
		var searchdate = $('#searchvalue').val(); 
		var viewType = $('#viewType').val(); 
		var StudentSelectMonth = $('#StudentSelectMonth').val(); 
		var StudentSelectYear = $('#StudentSelectYear').val(); 
	}
	else
	{
		var batch_dropdown = $('#batch_dropdown').val();
		var searchdate = searchdate; 
		var viewType = $('#viewType').val(); 
		var StudentSelectMonth = $('#StudentSelectMonth').val(); 
		var StudentSelectYear = $('#StudentSelectYear').val();
	}
	/*if(batch_dropdown=='')
	{
		alert('Please select batch from drop down');
		return false;
	}*/
	if(viewType=='monthly')
	{
		$('#dynamic_month').hide();
	}else
	{
		$('#dynamic_month').show();
	}
	var processingimg = '<div style="text-align:center;"><img src="'+imgurl+'img/image_processing.jpg"></div>';
	$('#studentScheduleView').html(processingimg).delay(2000);

	if(searchdate !='null'){
	   $.ajax({
		type:"POST",
		url:actionurl,
		data:'searchdate='+ searchdate+'&batch_dropdown='+batch_dropdown+'&viewType='+viewType+'&StudentSelectMonth='+StudentSelectMonth+'&StudentSelectYear='+StudentSelectYear,
	success:function(data)
		{
			$('#studentScheduleView').empty();
			$('#studentScheduleView').html(data);
		}
		});
	}
}




function get_state_user(staff_id,state_id,actionurl)
{
		$("#ajax_loader_state").css("display", "block");
		$("#ajax_loader_national").css("display", "block");
		if(staff_id != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'staff_id='+ staff_id +'&state_id=' + state_id,
						 success: function(data) 
						 {
							 // alert(data);
							  $('#state_user_id').empty();
							  $('#state_user_id').html(data);
							  $("#ajax_loader_state").css("display", "none");
							 
							  $('#national_dropdown').html("<option value=''>Select National Head</option>");
							  $("#ajax_loader_national").css("display", "none");		
							
						 }
					});
										
			
		}
		else
		{
				$('#state_user_id').html("<option value=''>Select Regional Head</option>");
	
		}
	
}


function get_national_user(state_id,national_id,actionurl)
{
		$("#ajax_loader_national").css("display", "block");
		if(state_id != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'state_id='+ state_id +'&national_id=' + national_id,
						 success: function(data) 
						 {
							 // alert(data);
							 $('#national_dropdown').empty();
							 $('#national_dropdown').html(data);
							 $("#ajax_loader_national").css("display", "none");
						 }
					});
										
			
		}
		else
		{
				$('#national_dropdown').html("<option value=''>Select National Head</option>");
	
		}
	
}


function get_user_role(role_code,user_id,actionurl)
{
		if(role_code != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'role_code='+ role_code +'&user_id=' + user_id,
						 success: function(data) 
						 {
							 // alert(data);
							 $('#user_dropdown').empty();
							 $('#user_dropdown').html(data);
						 }
					});
										
			
		}
		else
		{
				$('#user_dropdown').html("<option value=''>Select User</option>");
	
		}
	
}


function check_salary_slab(amount,actionurl)
{
		if(amount != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'amount='+ amount,
						 success: function(data) 
						 {
							 if(data)
							 {
							 	$('.error_div').css('display','block');
							 }
							 else
							 {
								 $('.error_div').css('display','none');
							 }
						 }
					});
										
			
		}
		else
		{
				$('.error_div').css('display','block');
	
		}
	
}

/*This function is used to calculate local distance deduction amount for Local Reimbursement*/

function get_local_deduction(actionurl , localdistance , deduction)
{
			
		var Data = $("#AddReimbursementLocalForm").serialize();
		
		$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: Data,
						 success: function(data) 
						 {
							if(deduction)
							{
								$("#estimated_deducted_amount").val(data);
							}
							else
							{
								$("#deduction_amount").val(data);
								$("#estimated_deducted_amount").val(data);
							}
						 }
					});
		
}


function get_local_deduction_old(actionurl , limit , localdistance)
{
			
		var deducted_amount = 0;
		
		for(i=1 ; i<= limit; i++)
		{
			if($('#visit_'+i).val() != '' && $('#report_ofc_'+i).val() != '' && $('#date_'+i).val() != '' && $('#client_'+i).val() != '' && $('#destination_'+i).val() != '' && $('#purpose_'+i).val() != '' && $('#distance_'+i).val() != '' && $('#mode_'+i).val() != '' && $('#amount_'+i).val() != '')
			{
				$("#check_error1").css("display", "");
								
				visit = $('#visit_'+i).val();
				report_ofc = $('#report_ofc_'+i).val();
				distance = $('#distance_'+i).val();
				amount = $('#amount_'+i).val();
		
				
				if(visit == 'home' && report_ofc == 0)
				{
					if(distance > localdistance)
					{
						rateperkm = amount/distance ;
						deducted_amount += parseFloat(rateperkm * localdistance);
						
					}
					else
					{
						deducted_amount += parseFloat(amount) ;
					}
					
				}
				else if(visit == 'home'  && report_ofc == 1)
				{
						newdistance = localdistance/2;
						if(distance > newdistance)
						{
							rateperkm = amount/distance ;
							deducted_amount += parseFloat(rateperkm * newdistance);
						}
						else
						{
							deducted_amount += parseFloat(amount) ;
						}
				}
				else if((visit == 'office' || visit == 'client') && report_ofc == 0)
				{
						newdistance = localdistance/2;
						if(distance > newdistance)
						{
							rateperkm = amount/distance ;
							deducted_amount += parseFloat(rateperkm * newdistance);
						}
						else
						{
							deducted_amount += parseFloat(amount) ;
						}
				}
												
			deducted_amount = Math.round(deducted_amount);	
				
			}
			else
			{
				if($('#visit_'+i).val() == '' && $('#report_ofc_'+i).val() == '' && $('#date_'+i).val() == '' && $('#client_'+i).val() == '' && $('#destination_'+i).val() == '' && $('#purpose_'+i).val() == '' && $('#distance_'+i).val() == '' && $('#mode_'+i).val() == '' && $('#amount_'+i).val() == '')
				{
					
				//	Do nothing
					
				}
				else
				{
					$("#check_error1").css("display", "block");
				}
				
			}
		}
				
		$("#deduction_amount").val(deducted_amount);
		return false;
}

/*This function is used to get the overall budget Sattus of the User for a particilar month*/


	function get_available_budget(user_id , user_type , fromdate , todate , actionurl,from)
	{

		 
	
		if(fromdate != 'null' && todate != null)
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'user_id='+user_id+ '&user_type='+user_type +'&fromdate='+fromdate +'&todate='+ todate+'&from='+from,
						 success: function(data) 
						 {
							//alert(data);
							$('#show_local_budget').empty();
							$('#show_local_budget').html(data);
						 
							//document.getElementById("pets").options[2].disabled = true;
						 }
					});
			return false;							
			
		}
	
	}
	
	
	function get_available_budget2(user_id , fromdate , todate , actionurl)
	{

 
	 
		if(fromdate != 'null' && todate != null)
		{
			
			$.ajax({
						 type: "GET",
						 url: actionurl,
						 data: 'user_id='+user_id+'&fromdate='+fromdate +'&todate='+ todate,
							 
						success: function(data) 
						 {
							 
							if(data>0)
							document.getElementById("is_approved").options[1].disabled = true;
							//$('#show_local_budget').empty();
							//$('#show_local_budget').html(data);
							 
							//document.getElementById("pets").options[2].disabled = true;
						 }
					});
			return false;							
			
		}
	
	}
	
	
	
/*This function is used to check whether the limit exccede the available montly budget
including the reimbursed amount for local reimbursement	*/

	function check_monthly_budget( user_id , user_type , fromdate , todate , actionurl ,  total , from)
	{	
		if(total != 'null')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'user_id='+user_id+ '&user_type='+user_type +'&fromdate='+fromdate +'&todate='+ todate+ '&amount='+total+'&from='+from,
						 success: function(data) 
						 {
							var arr = data.split('|');
							 if(arr[0])
							 {
							 	$('.error_div').css('display','block');
								$('.error_div #failMessage').html('NOTE : With this reimbursed amount Monthly Budget will exceede by Rs. '+arr[1]);
							 }
							 else
							 {
								 $('.error_div').css('display','none');
							 }
						 }
					});
										
			
		}
		else
		{
				$('.error_div').css('display','block');
	
		}
	
	}
	
	function get_region_sales_school(region_id,school_id,actionUrl)
	{	
		if(region_id !='null')
		{
			$.ajax({
				type:"POST",
				url:actionUrl,
				data:'region_id='+ region_id +'&school_id='+ school_id,
				success:function(data){
					//alert(data);
					$('#school_dropdown').empty();
					$('#school_dropdown').html(data);
					 $("#ajax_loader_school").css("display", "none");
					}
			});
		}
		else
		{
			$('#school_dropdown').html("<option value=''>Select School</option>");
		}
	}
	
	
function get_sales_schedule(searchdate,actionurl,imgurl,search)
{

	var processingimg = '<div style="text-align:center;"><img src="'+imgurl+'img/image_processing.jpg"></div>';
	$('#facultyScheduleView').html(processingimg).delay(2000);
	
	if(search!='')
	{
		if(searchdate == '')
		{
			var cfirst = $('#first').val();
			var clast = $('#last').val();
			var setsize = 7;
		}
		else
		{
			var cfirst = '';
			var clast = '';
			var setsize = '';
		}
		
		var StudentSelectMonth = $('#StudentSelectMonth').val(); 
		var StudentSelectYear = $('#StudentSelectYear').val(); 
	}
	
	if(searchdate !='null')
	{
		$.ajax({
		type:"POST",
		url:actionurl,
		data:'searchdate='+searchdate+'&cfirst='+ cfirst+'&clast='+clast+'&setsize='+setsize+'&SalesSelectMonth='+StudentSelectMonth+'&SalesSelectYear='+StudentSelectYear,
	success:function(data)
		{
			$('#facultyScheduleView').empty();
			$('#facultyScheduleView').html(data);
		}
		});
	}
}

function get_sales_schedule_admin(searchdate,actionurl,imgurl,search)
{

	var processingimg = '<div style="text-align:center;"><img src="'+imgurl+'img/image_processing.jpg"></div>';
	$('#facultyScheduleView').html(processingimg).delay(2000);
	
	if(search!='')
	{
		var faculty = $('#user_dropdown').val();
		var regionID = $('#regionID').val();
		if(faculty != '' || regionID !='')
		{
			var cfirst = $('#first').val();
			var clast = $('#last').val();
			var setsize = 7;
		}
		else
		{
			var cfirst = '';
			var clast = '';
			var setsize = '';
		}
		
		if(searchdate == '')
		{
			var cfirst = $('#first').val();
			var clast = $('#last').val();
			var setsize = 7;
		}
		else
		{
			var cfirst = '';
			var clast = '';
			var setsize = '';
		}
		
		var StudentSelectMonth = $('#StudentSelectMonth').val(); 
		var StudentSelectYear = $('#StudentSelectYear').val(); 
	}
	
	if(searchdate !='null')
	{
		$.ajax({
		type:"POST",
		url:actionurl,
		data:'searchdate='+searchdate+'&faculty='+faculty+'&regionID='+regionID+'&cfirst='+ cfirst+'&clast='+clast+'&setsize='+setsize+'&SalesSelectMonth='+StudentSelectMonth+'&SalesSelectYear='+StudentSelectYear,
	success:function(data)
		{
			$('#facultyScheduleView').empty();
			$('#facultyScheduleView').html(data);
		}
		});
	}
}


	/*This function is used to get the budget period depending upon the region id	*/	
	
	function get_budget_period(region_id , actionurl)
	{
		if(region_id != '')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'region_id='+region_id,
						 success: function(data) 
						 {
							 $('#period_dropdown').empty();
							 $('#period_dropdown').html(data);
						 }
					});
		}
		else
		{
			$('#period_dropdown').html("<option value=''>Select Period</option>");
		}
		
	}

	/*This function is used to get the budget calculation depending upon the region id and period */	
	
	function get_budget_amount(period , actionurl)
	{
		var region_id = $('#region').val();
		if(period != '')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'period='+period+'&region_id='+region_id,
						 success: function(data) 
						 {
							$('#dynamic_budget_expenditure').html(data);
						 }
					});
		}
	
	}
	
	/*This function is used to get the budget calculation depending upon the particular month , region id and period */
		
	function get_budget_monthly(period , actionurl)
	{
		var region_id = $('#region').val();
		var period_from = $('#period_from').val();
		var period_to = $('#period_to').val();
		
		if(period != '')
		{
			$.ajax({
						 type: "POST",
						 url: actionurl,
						 data: 'period='+period+'&region_id='+region_id+'&period_from='+period_from+'&period_to='+period_to,
						 success: function(data) 
						 {
							$('#dynamic_monthly_expenditure').html(data);
						 }
					});
		}
		else
		{
				
					$('#dynamic_monthly_expenditure').html('');
		}
		
		
	}
	
	function get_sub_region(region_id,sub_region,actionUrl){
		$("#ajax_loader_school").css("display", "block");
		if(region_id !='null'){
			$.ajax({
				type:"POST",
				url:actionUrl,
				data:'region_id='+ region_id +'&sub_region='+ sub_region,
				success:function(data){
					//alert(data);
					$('#subregion_dropdown').empty();
					$('#subregion_dropdown').html(data);
					 $("#ajax_loader_school").css("display", "none");
					}
		});
		}else{
			$('#subregion_dropdown').html("<option value=''>Select School</option>");
		}
	}
	
	function get_region_sales_user(region_id,user_id,actionUrl){
		$("#ajax_loader_school").css("display", "block");
		if(region_id !='null'){
			$.ajax({
				type:"POST",
				url:actionUrl,
				data:'region_id='+ region_id +'&user_id='+ user_id,
				success:function(data){
					//alert(data);
					$('#user_dropdown').empty();
					$('#user_dropdown').html(data);
					 $("#ajax_loader_school").css("display", "none");
					}
		});
		}else{
			$('#user_dropdown').html("<option value=''>Select School</option>");
		}
	}
	
	function get_sales_school_details(school_id,actionUrl)
	{
		$("#ajax_loader_school").css("display", "block");
		if(school_id !='null'){
			$.ajax({
				type:"POST",
				url:actionUrl,
				data:'school_id='+ school_id,
				success:function(data){
					//alert(data);
					$('#dynamic_detail').empty();
					$('#dynamic_detail').html(data);
					 $("#ajax_loader_school").css("display", "none");
					}
		});
		}
	
	}
	
	function get_heirarchi_sales_user(sales_id, actionUrl)
	{
		
		if(sales_id !='null'){
			$.ajax({
				type:"POST",
				url:actionUrl,
				data:'sales_id='+ sales_id,
				success:function(data){
					//alert(data);
					$('#sales').empty();
					$('#sales').html(data);
					
					}
		});
		}
	}