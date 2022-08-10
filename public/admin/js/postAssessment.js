//-----------------------------------------------------------------------------------------------------------
 //FUNCTIONS CREATED BY MUSHARRAF KHAN ON DATED 17-1-2018 
//
   // FOLDER PATH
 //  rootFolder = location.pathname.substr(0, 7) === '/site-a' ? '/site-a/' : '';

 // rootFolder ="http://172.16.0.125/mindbox/public/";
	 
	
	/* function getTeamSchedule()
       {   
	   		_token=$("#_token").val(); 
           
		    $.ajax({
               type: "POST",
               url: rootFolder+"TeamSchedule", 
               data: {_token:_token } 
           }).done(function( msg ) {    
          	$('#schedule_all').modal('open');
			 
           });
	   
     }*/
   
   
   
   function delPostassessment(scoreid)
   {
	   
	     _token=$("#_token").val();
		 swal({  title: "Are you sure?",
		text: "You want Delete This Assessment Details",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes',
		cancelButtonText: "No"
		}, 
     function(){  
           $.ajax({
               type: "POST",
             url: rootFolder+"deleteassemnt", 
               data: {_token:_token,scoreid:scoreid }
           }).done(function( msg ) {  
             $("#multiple37").trigger("reloadGrid", [{current: true}]);
			}); 
           }); 
   
   }
   
   
   function enableDownload(scoreid)
   {
	 _token=$("#_token").val();

 /*  var con=confirm("Do you really want to enable this users for certificate download?");
   if(con==true)
{
	 $.ajax({
               type: "POST",
               url: rootFolder+"enabledown", // This is what I have updated
               data: {_token:_token,scoreid:scoreid}
           }).done(function( msg ) {

             swal(msg);		   
            // $(".successMsg").show();
             //$(".successMsg").html(msg);
			 $("#multiple37").trigger("reloadGrid", [{current: true}]);
			 
			 
             
           });
	
}  */

swal({  title: "Are you sure?",
		text: "You want enable this users for certificate download",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes',
		cancelButtonText: "No"
		}, 
     function(){   
			_token=$("#_token").val(); 
			$.ajax({
               type: "POST",
               url: rootFolder+"enabledown", 
               data: {_token:_token,scoreid:scoreid} 
           }).done(function( msg ) {   
		   
			 $("#multiple37").trigger("reloadGrid", [{current: true}]); 
			});
        });






  
 
   }
   
   
   
   function disableDownload(scoreid)
   {
	 _token=$("#_token").val();

  /* var con=confirm("Do you really want to disable this users for certificate download?");
   if(con==true)
{
	 $.ajax({
               type: "POST",
               url: rootFolder+"disabledown", // This is what I have updated
               data: {_token:_token,scoreid:scoreid}
           }).done(function( msg ) {

             swal(msg);		   
            // $(".successMsg").show();
             //$(".successMsg").html(msg);
			 $("#multiple37").trigger("reloadGrid", [{current: true}]);
			 
			 
             
           });
	
} */


swal({  title: "Are you sure?",
		text: "You want disable this users for certificate download",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes',
		cancelButtonText: "No"
		}, 
     function(){   
			_token=$("#_token").val(); 
			$.ajax({
               type: "POST",
               url: rootFolder+"disabledown", 
               data: {_token:_token,scoreid:scoreid} 
           }).done(function( msg ) {   
		   
			 $("#multiple37").trigger("reloadGrid", [{current: true}]); 
			});
        });
  
 
   }
	 

	

	/* function editTraining(id)
   {
	 _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"AddTraingForm", 
               data: {_token:_token,id:id }
           }).done(function( msg ) {  
             $("#mydiv").html(msg);
			 $('#mydiv').modal('open');
			  getTrainner();
			  getCourses();
			  getInstitutes();
			 
           }); 
   }
   */
   