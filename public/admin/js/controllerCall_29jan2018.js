//-----------------------------------------------------------------------------------------------------------
 //FUNCTIONS CREATED BY Rakesh Kumar ON DATED 17-1-2018 
//
   // FOLDER PATH
 //  rootFolder = location.pathname.substr(0, 7) === '/site-a' ? '/site-a/' : '';
 //rootFolder ="http://localhost/newCorel/public/";

 //rootFolder ="http://localhost/corel/public/";
/*
	 function downloadcertification(id){

      alert('Waiting for certificate formate!');
      return false;

   }*/


    function  getInstitutes()
       {     

       _token=$("#_token").val(); 
	   institute_name = $("#institute_name").val();
           $.ajax({
               type: "POST",
               url: rootFolder+"institutes", // This is what I have updated
               data: {_token:_token,institute_name:institute_name }
           }).done(function( msg ) {  
             $("#institute").html(msg);
           });
       
     }  
     
    function  getDepartment()
       {       
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"department", // This is what I have updated
               data: {_token:_token }
           }).done(function( msg ) {  
             $("#department").html(msg);
           });
       
     }  
     
    function  SaveCertificationData()
       {   
	    //certificationId = $('#certificationId').val();  
        certificate_format   = $("#certificate_format").val(); 
        certificationName           = myTrim($("#certification").val());  
        description    = $("textarea#description").val(); 
        institute = $('#institute').val();
        branchId = $('#BranchId').val();
        examdate = $('#examdate').val();
        question_qty = $('#question_qty').val();
        // exam_duration = $('#exam_duration').val();

        _token               = $("#_token").val(); 
        if(certificate_format=="")
        {
            alert("Please Select Certificate Format");
            return false;	
        }    
             
       
        if(examdate == ''){
           alert("Please Enter exam date");
            return false;
        }


        if(certificationName=="")
        {
            alert("Please Enter Certification");
            return false; 
        }


        if(question_qty == ''){

            alert('Please enter no. of question for certification.');
            return false;
        }

        // if(exam_duration ==''){
        //    alert('Please enter exam duration in minuts.');
        //     return false;          
        // }

        if(institute ==''){
          alert('Please select institute.');
          return false;

        }

        if(branchId == ''){
            alert('Please select institute branch.');
            return false;
          
        }

        if(description ==''){
            alert("Please enter certification description");
            return false;
        }

        var formdata = $('#addcertification').serialize();


        $.ajax({
            type: "POST",
            url: rootFolder+"savecertification", // This is what I have updated
            data: {formdata,_token:_token},
    
            }).done(function( res) {                 
    
                var res = JSON.parse(res);

                //console.log(res);
               // return false;
                   
                if(res.success && res.question !='' ){

                  
                    swal({
                        title: 'Certification!',
                        text: res.success,
                        type: 'success'
                    },function(){
                        // $("#multiple37").trigger("reloadGrid", [{current: true}]); 
                        // location.reload();  

                          $.ajax({
                                  type: "POST",
                                   url: rootFolder+"exam_question", 
                                  data: {_token:_token,certification_id:res.certification_id,question_qty:question_qty }
                              }).done(function( msg ) {  

                                 var res = JSON.parse(msg);

                                 swal({
                                    title: 'Success!',
                                    text: res.success,
                                    type: 'success'
                                  },function(){
                                     $("#ajax_loader").hide();
                                      $("#multiple37").trigger("reloadGrid", [{current: true}]); 
                                      location.reload();  
                                  }); 

                                //$("#multiple37").trigger("reloadGrid", [{current: true}]);
                               });
                        });   

                     /* swal({  title: "Are you sure?",
                           text:  res.success+ " You want to add exam question!",
                           type: "warning",
                           showCancelButton: true,
                           confirmButtonColor: '#DD6B55',
                           confirmButtonText: 'Yes',
                           cancelButtonText: "No"
                           }, 
                           function(isConfirm){ 

                            if(isConfirm){
                                 $("#ajax_loader").show();
        
                                $.ajax({
                                  type: "POST",
                                   url: rootFolder+"exam_question", 
                                  data: {_token:_token,certification_id:res.certification_id,question_qty:question_qty }
                              }).done(function( msg ) {  

                                 var res = JSON.parse(msg);

                                 swal({
                                    title: 'Success!',
                                    text: res.success,
                                    type: 'success'
                                  },function(){
                                     $("#ajax_loader").hide();
                                      $("#multiple37").trigger("reloadGrid", [{current: true}]); 
                                      location.reload();  
                                  }); 

                                //$("#multiple37").trigger("reloadGrid", [{current: true}]);
                               }); 
                            }else{

                             $("#multiple37").trigger("reloadGrid", [{current: true}]); 
                             location.reload();
                            }

                          }); */
                       
                  }else if(res.success && res.question ==''){

                  swal({
                        title: 'certification!',
                        text: res.success,
                        type: 'success'
                    },function(){
                        $("#multiple37").trigger("reloadGrid", [{current: true}]); 
                        location.reload();  
                    }); 


                }else{
                    swal({
                        title: 'Error!',
                        text: 'Unable To save data.',
                        type: 'error'
                    },function(){
                        $("#multiple37").trigger("reloadGrid");   
                        location.reload(); 
                    });             
                   
                }                           
    
            });            
     } 
	 
	 
	 function editCertification(id)
        {
        $("#ajax_loader").show();
        _token=$("#_token").val(); 	 
        $.ajax({
            type: "POST",
            url: rootFolder+"createCertificationForm", 
            data: {_token:_token,id:id }
        }).done(function( msg ) {  
            $("#mydiv").html(msg);
            $('#mydiv').modal('open');        
            $("#ajax_loader").hide();
            
            
        }); 
    }


     
    function deleteCertification(id)
    {
        
          _token=$("#_token").val();
          swal({  title: "Are you sure?",
         text: "You want to delete Certification!",
         type: "warning",
         showCancelButton: true,
         confirmButtonColor: '#DD6B55',
         confirmButtonText: 'Yes',
         cancelButtonText: "No"
         }, 
         function(){  
            $.ajax({
                type: "POST",
                 url: rootFolder+"deleteCertification", 
                data: {_token:_token,id:id }
            }).done(function( msg ) {  
              $("#multiple37").trigger("reloadGrid", [{current: true}]);
             }); 
         }); 
    
    }

    function  getcertificationEnable(id,status)
    {
        if(status==1)
        {
            var enable="disable"
        }else{
             var enable="enable"
        }
            swal({  title: "Are you sure?",
            text: "You want to "+enable+" Certification",
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
                    url: rootFolder+"enableCertification", 
                    data: {_token:_token,id:id,status:status} 
                }).done(function( msg ) {   
                    $("#multiple37").trigger("reloadGrid", [{current: true}]); 
                
                });
               
            });
     
  }


function getInstituteBranch(instituteId){


      $("#ajax_loader").show();
          _token=$("#_token").val(); 
          $.ajax({
              type: "POST",
              url: rootFolder+"getCertificationInstituteBranch", 
              data: {_token:_token,institute:instituteId}
          }).done(function( msg ) {  

            $('#branchList').html(msg);
            
              $("#ajax_loader").hide();
          });
    } 





  /*  Institute  management  */

  function getCollegeList()
  { 
  //alert("Hello");
   $("#ajax_loader").show();
             _token=$("#_token").val(); 
            $.ajax({
                type: "POST",
                url: rootFolder+"CollegeList", 
                data: {_token:_token}
            }).done(function( msg ) {    
              $("#mydiv").html(msg);
              $('#mydiv').modal('open');
              $("#ajax_loader").hide();
            });
  }	
  
  function getInstituteListwithpop()
  { 
  
         $("#ajax_loader").show();
        _token=$("#_token").val(); 
        $.ajax({
            type: "POST",
            url: rootFolder+"CollegeList", 
            data: {_token:_token}
        }).done(function( msg ) {    
            $("#mydiv").html(msg);
        
            $("#ajax_loader").hide();
        });
  }
 

 
    function  SaveCollegeData()
        {   
            collegename = $("#collegename").val();
          
           
           
        _token=$("#_token").val(); 
            $.ajax({
            type: "POST",
            url: rootFolder+"AddCollege", // This is what I have updated
            data: {_token:_token,collegename:collegename}
            }).done(function( res) { 
                var res = JSON.parse(res);  
                if(res.success){
                    swal({
                        title: 'Success',
                        text: res.success,
                        type: 'success'
                    }, function() {
                        getInstituteListwithpop();

                    });  

                }else{
                    swal({
                        title: 'Error!',
                        text: res.error,
                        type: 'success'
                    }, function() {
                        getInstituteListwithpop();

                    }); 
                }              
            });  
     }
 /*******     get popup with listing page       *** */

 function getInstituteBranchList()
  { 
  
    $("#ajax_loader").show();
    _token=$("#_token").val(); 

           
        $.ajax({
            type: "POST",
            url: rootFolder+"InstituteBranchList", 
            data: {_token:_token}
        }).done(function( msg ) {    
            $("#mydiv").html(msg);
            $('#mydiv').modal('open');
            $("#ajax_loader").hide();
        });
  }	

  /*******     refresh popup with listing page       ***/

  function getInstituteBranchListAfterSave()
  { 
  
    $("#ajax_loader").show();
    _token=$("#_token").val(); 

           
        $.ajax({
            type: "POST",
            url: rootFolder+"InstituteBranchList", 
            data: {_token:_token}
        }).done(function( msg ) {    
            $("#mydiv").html(msg);
           
            $("#ajax_loader").hide();
        });
    }

/****************  get edit popup  *********************** */


  function getInstituteBranchEdit(id)
  { 
  
    $("#ajax_loader").show();
    _token=$("#_token").val();            
        $.ajax({
            type: "POST",
            url: rootFolder+"InstituteBranchEditGetdata", 
            data: {_token:_token,branchId:id}
        }).done(function( msg ) {    
            $("#mydiv").html(msg);
            $('#mydiv').modal('open');
            $("#ajax_loader").hide();
        });
  }	


  function addBranch(){
    _token=$("#_token").val(); 
    var branchId = $('#branchId').val();
    var institute = $('#institute').val();
    var location = myTrim($('#address').val());
    var region = $('#region').val();
    var state = $('#state').val();
    var city = $('#city').val();


    
   

     if(institute == ''){
      alert('Please select institute.');return false;
      
    }


     if(location == ''){

       alert('Enter Branch location address.');return false;
      
    }

     if(region == ''){
       alert('Please select region.');return false;
      
    }

     if(state ==''){
       alert('Please select state.');return false;
      
    }

     if(city ==''){
       alert('Please select city.');return false;
      
    }




    $.ajax({
        type: "POST",
        url: rootFolder+"InstituteBranchSave", 
        data: {_token:_token,institute:institute,location:location,region:region,state:state,city:city,branchId:branchId}
    }).done(function( res ) { 
        
        var res = JSON.parse(res);  
        if(res.success){
            swal({
                title: 'Success',
                text: res.success,
                type: 'success'
            }, function() {
                getInstituteBranchListAfterSave();

            });  

        }else{
            swal({
                title: 'Error!',
                text: res.error,
                type: 'success'
            }, function() {
                getInstituteBranchListAfterSave();

            }); 
        }    
      
    });

 }



  function  getState(id)
  {       
   _token          = $("#_token").val();
  
     $.ajax({
          type: "POST",
          url: rootFolder+"state", 
          data: {_token:_token,region_id:id }
      }).done(function( msg ) {   
        $("#stateId").html(msg);
      });
  
}

function  getCity(id)
  {       
   _token          = $("#_token").val();	   
      $.ajax({
          type: "POST",
          url: rootFolder+"city", 
          data: {_token:_token,state_id:id }
      }).done(function( msg ) {  
        $("#cityId").html(msg);
      });
  
}


/*  Institute user List */








 function getInstituteUserList()
  { 
  
    $("#ajax_loader").show();
    _token=$("#_token").val(); 

           
        $.ajax({
            type: "POST",
            url: rootFolder+"instituteUserList", 
            data: {_token:_token}
        }).done(function( msg ) {    
            $("#mydiv").html(msg);
            $('#mydiv').modal('open');
            $("#ajax_loader").hide();
        });
  } 

// function getInstituteUserListAfterSave()
//   { 
  
//     $("#ajax_loader").show();
//     _token=$("#_token").val();            
//         $.ajax({
//             type: "POST",
//             url: rootFolder+"getInstituteUserList", 
//             data: {_token:_token}
//         }).done(function( msg ) {    
//             $("#mydiv").html(msg);           
//             $("#ajax_loader").hide();
//         });
//     }


  function addInstituteUser(){
    _token=$("#_token").val(); 
   
    var institute = $('#institute').val();
         name = myTrim($("#yourname").val());       
         email = $("#youremail").val();
         username = myTrim($("#yourusername").val());
         password = myTrim($("#yourpassword").val());
        _token   = $("#_token").val();  

         if(institute == ""){
          alert('Please select institute.');
          return false;
        } 

        if(name == ""){
          alert('Please enter your name.');
          return false;
        }   

        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
        if (email == '' || !re.test(email))
        {
            alert('Please enter a valid email address.');
            return false;
        }

        if(username ==''){
          alert('Please enter username.');
          return false;
        }

        if(password ==''){
          alert('Please enter password.');
          return false;
        }

    

    $.ajax({
        type: "POST",
        url: rootFolder+"InstituteUserSave", 
        data: {_token:_token,institute:institute,name:name,email:email,username:username,password:password}
    }).done(function( res ) { 
        
        let res = JSON.parse(res);  
       // alert(res.error);return false;

        if(res.success){
            swal({
                title: 'Institute users!',
                text: res.success,
                type: 'success'
            }, function() {
                getInstituteUserList();

            });  

        }else{
            swal({
                title: 'Institute users!',
                text: res.error,
                type: 'error'
            }, function() {
                getInstituteUserList();

            }); 
        }    
      
    });

 }






  /* End  */    


     function RemovegridLib()
        {  
		   _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"gridLib", 
               data: {_token:_token}
           }).done(function(msg) {   
		     $("#gridLib").html(''); 
		    
			
        }); 
    }
   
    function allEnablesTrainig(id)
    {
       
      // RemovegridLib();
       _token=$("#_token").val();
       if(id==1) {   
       
         var titletest    ="You want to enable certification!";
         var titlesuccess  ="Certification enabled Successfully.!";
       }
       if(id==2) {   
       
         var titletest    ="You want to disable certification!";
         var titlesuccess ="Certification disabled Successfully.!";
       }
       if(id==3) {   
       
         var titletest    ="You want to delete certification!";
         var titlesuccess ="Certification deleted Successfully.!";
         
       }
      var checkValues = $('input[name=trianID]:checked').map(function()
              {
                  return $(this).val();
              }).get();
          if(checkValues.length<=0)
              {
                  alert("Please select at least one certification");
                  return false;
              }

            

          swal({
          
                title: "Are you sure?",
                text:titletest,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor:'#DD6B55',
                confirmButtonText: 'Yes',
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function(isConfirm) {         
               if(isConfirm  == true){
             
             _token=$("#_token").val(); 
               $.ajax({
                 type: "POST",
                 url: rootFolder+"enableDisableDelte", // This is what I have updated
                 data: {_token:_token ,id:id,checkValues:checkValues}
                 }).done(function( res) {
                                      
                    if(res == 1){
                        swal({
                            title: 'Certification!',
                            text: titlesuccess,
                            type: 'success'
                        }, function() {
                            $("#multiple37").trigger("reloadGrid", [{current: true}]); 
                            $('#trianID1').prop('checked', false);
                         });
                    }                  
             });          
        }
        
     });
   }


 /* Add in Ended */ 
 
 function myTrim(x) {
  return x.replace(/^\s+|\s+$/gm,'');
}
 
  function alreadyExistCollege()
    {
        collegename       = myTrim($("#collegename").val());

       // alert(collegename);return false;
      // collegename =  collegename.trim();
     //    address           = $("#address").val(); 


         _token=$("#_token").val(); 
         
         if(collegename=="")
            {
               alert("Please Enter Institute Name");
               $("#collegename").focus();
                return false;	
            }
       
         
         $.ajax({
                type: "POST",
                url: rootFolder+"CheckCollege", // This is what I have updated
                data: {_token:_token,collegename:collegename }
                }).done(function( msg) {                    
                   // alert(msg);                    
                    if(msg=="yes")
                    {
                        alert("This Institute is Already Exist");
                        getInstituteListwithpop();                    
                    }
                    else{
                        
                        SaveCollegeData();
                    }
           });
           
    }
    
 
 function editInstitute(collegeId)
 {
    
     $("#ajax_loader").show();     
        _token=$("#_token").val(); 
            $.ajax({
                type: "POST",
                url: rootFolder+"getCollege", 
                data: {_token:_token,collegeId:collegeId }
            }).done(function( msg ) {		   
              $("#xsmall").html(msg);
              $('#xsmall').modal('open');
              $("#ajax_loader").hide();
      });
 }
 
 /* function UpdateCollege()
 {
     
        collgpost       = $("#collgname").val();
        addpost           = $("#add").val();
        collegeId = $("#collegeId").val();
     $("#ajax_loader").show();     
        _token=$("#_token").val(); 
            $.ajax({
                type: "POST",
                url: rootFolder+"updateCollege", 
                data: {_token:_token,collgpost:collgpost,addpost:addpost,collegeId:collegeId}
            }).done(function( msg ) {		   
              $("#xsmall").html(msg);
              $('#xsmall').modal('open');
              $("#ajax_loader").hide();
      }); 
 } */
 
    function ChkCollegeData(collegeId)
    {
     
        collgname       = $("#collgname").val();   
        collegeId = $("#collegeId").val();        
         _token=$("#_token").val();          
         if(collgname=="")
            {
               alert("Please Enter institute Name");
               $("#collgname").focus();
                return false;	
            }        
            
            swal({
                 title: 'Institute!',
                 text: 'Institute Updated Successfully.!',
                 type: 'success'
             }, function() {
            _token=$("#_token").val(); 
              $.ajax({
                type: "POST",
                url: rootFolder+"updateCollege", // This is what I have updated
                data: {_token:_token,collgname:collgname,collegeId:collegeId}
                }).done(function( msg) {
                    //location.reload();
                    $('#xsmall').modal('close');
                    getCollegeList();
                    
                });
         });
    }        


  /* End */






function studentProfileContainer(id)
        {   $("#ajax_loader").show();
        _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"studentProfileContainer", 
               data: {_token:_token,id:id }
           }).done(function( msg ) { 
       $("#ajax_loader").hide(); 
       }); 
   }
function UserProfile(id)
        {
       $("#ajax_loader").show();
          _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"profile", 
               data: {_token:_token,id:id }
           }).done(function(msg) { 
         $("#basic-form").html(''); 
         $("#basic-form").html(msg);
       $("#ajax_loader").hide(); 
       }); 
   }



  function  getStudentTraining(id)
  {     
  _token=$("#_token").val(); 
      $.ajax({
          type: "POST",
          url: rootFolder+"trainingView", 
          data: {_token:_token,id:id }
      }).done(function( msg ) {    
        $("#mydiv").html(msg);
        $('#mydiv').modal('open');
      });
  
}


   
   
 function  getusersList(id)
       {     
         $("#ajax_loader").show();
            _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"TrainingUsersList", 
               data: {_token:_token,id:id }
           }).done(function( msg ) {    
             $("#mydiv").html(msg);
       $('#mydiv').modal('open');
       $("#ajax_loader").hide();
           });
       
     }
   

 
function  getApprovedList(id)
       {
    $("#ajax_loader").show();        
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"TrainingApprovedList", 
               data: {_token:_token,id:id }
           }).done(function( msg ) {   
             $("#mydiv").html(msg);
       $('#mydiv').modal('open');
       $("#ajax_loader").hide();
           });
       
     }

 
   function getDownloadForm(id)
        {     
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"downloadForm", 
               data: {_token:_token,id:id}
           }).done(function(msg) { 
         $("#mydiv").html(''); 
         $("#mydiv").html(msg); 
       $('#mydiv').modal('open'); 
       }); 
   }
   
   
   
   
 function getChangePassword(id)
        {   
      $("#ajax_loader").show();
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"changePassword", 
               data: {_token:_token,id:id}
           }).done(function(msg) { 
         $("#small_modal").html(''); 
         $("#small_modal").html(msg); 
       $('#small_modal').modal('open');
       $("#ajax_loader").hide(); 
      
       }); 
   }   
  
    
 function getFeedbackUserMore(id,user_id)
        {  $("#ajax_loader").show();
      _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"FeedbackUserMoreView", 
               data: {_token:_token,id:id,user_id:user_id}
           }).done(function(msg) { 
         $("#mydiv").html(''); 
         $("#mydiv").html(msg); 
       $('#mydiv').modal('open');
       $("#ajax_loader").hide();  
       }); 
   } 
 function checkCurrentPass()
        {  
      _token         = $("#_token").val();
      usersCurrPass  = $("#usersCurrPass").val();
           $.ajax({
               type: "POST",
               url: rootFolder+"checkCurrentPass", 
               data: {_token:_token,usersCurrPass:usersCurrPass}
           }).done(function(msg) { 
         $("#cureentmsg").html(msg);
        
       }); 
   } 
  function checkNewConfirmPass()
        {  
      _token         = $("#_token").val();
      usersNewPass   = $("#usersNewPass").val();
      usersConfPass  = $("#usersConfPass").val();
            if (usersNewPass !=usersConfPass)
      {
      $("#usersConfPassmsg").html("<span class='red-text'>Confirm password not matching</span>");
      $("#usersConfPass").val('');
      }else{
       $("#usersConfPassmsg").html("<span class='green-text'><i class='material-icons dp48'>check</i></span>");
      }
       
   }
   
   function upddatePassword()
        {  
      _token         = $("#_token").val();
      usersCurrPass  = $("#usersCurrPass").val();
      usersNewPass   = $("#usersNewPass").val();
      usersConfPass  = $("#usersConfPass").val();
            
           if(usersCurrPass=="")
           {
              alert("Please Enter Current Password");
               return false;  
           }
           if(usersNewPass=="")
           {
              alert("Please Enter New Password ");
               return false;  
           }
           if(usersConfPass=="")
           {
              alert("Please Enter Confirm Password");
               return false;  
           }
          
         
       swal({
        title: "Are you sure?",
        text: "You want to Change Password!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
     closeOnConfirm: false,
        closeOnCancel: true
        
    },
    function(isConfirm) {
     
        if (isConfirm) {
            swal({
                title: 'Password!',
                text: 'Password Saved Successfully.!',
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
       $.ajax({
               type: "POST",
               url: rootFolder+"updateChangePass", // This is what I have updated
               data: {_token:_token,usersCurrPass:usersCurrPass,usersNewPass:usersNewPass,usersConfPass:usersConfPass}
         }).done(function( msg) {  
        location.reload();
        
      });
        });
    }
    
   });
   } 

/********************************************************************************************** */







	// function  getAddTrainingForm()
    //    {   
	//     $("#ajax_loader").show();    
    //    _token=$("#_token").val(); 
    //        $.ajax({
    //            type: "POST",
	// 		   data: {_token:_token },
    //            url: rootFolder+"createCertificationForm",
	// 		   success: function(res){ 
	// 		      $('#mydiv').html('');
	// 			   $('#mydiv').html(res);
	// 			    $('#mydiv').modal('open');
	// 		   }  
			
	// 	     });
	// 		  $("#ajax_loader").hide();
       
    //  } 

function  getFeedbackList (id)
       { 
	    $("#ajax_loader").show();     
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"TrainingFeedbackList", 
               data: {_token:_token,id:id }
           }).done(function( msg ) {    
             $("#mydiv").html(msg);
			 $('#mydiv').modal('open');
			 $("#ajax_loader").hide();
           });      
     }
	 
	
function getTeamSchedule()
       {    $("#ajax_loader").show();
	   		_token=$("#_token").val(); 
           
		    $.ajax({
               type: "POST",
               url: rootFolder+"TeamSchedule", 
               data: {_token:_token } 
           }).done(function( msg ) { 
		  	    $("#schedule_all").html(msg);
		      $('#schedule_all').modal('open');
			  $("#ajax_loader").hide();
			 });
	   
     }
function getTrainerSchedule(id)
       {    $("#ajax_loader").show();
	   		_token=$("#_token").val(); 
           
		    $.ajax({
               type: "POST",
               url: rootFolder+"gettTrainerSchedule", 
               data: {_token:_token,id:id } 
           }).done(function( msg ) { 
		  	    $("#schedule_all").html(msg);
		      $('#schedule_all').modal('open');
			  $("#ajax_loader").hide();
			 });
	   
     }
	
  
   function  getDeleteFeedback(id)
       {  
	   
	   swal({  title: "Are you sure?",
		text: "You want to delete user.",
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
               url: rootFolder+"deleteFeedback", 
               data: {_token:_token,id:id} 
           }).done(function( msg ) {    
           $("#multiple37").trigger("reloadGrid", [{current: true}]);
            location.reload();
			 
           });
        });
	       
       
     }

	 
	 
function  getFeedbackEnable(id,status)
       {   
	   if(status==1)
		   {
			   var enable="disable"
		   }else{
			    var enable="enable"
		   }
	 	swal({  title: "Are you sure?",
		text: "You want to "+enable+" user",
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
               url: rootFolder+"enableFeedback", 
               data: {_token:_token,id:id,status:status} 
           }).done(function( msg ) {   
		   
			 $("#multiple37").trigger("reloadGrid", [{current: true}]); 
			});
        });
   }



   
   function  getFeedbackListView(id)
       {      
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"feedbackListView", 
               data: {_token:_token,id:id }
           }).done(function( msg ) {    
             $("#mydiv").html(msg);
			 $('#mydiv').modal('open');
           });      
     }	 

  function  getTrainingReg(id)
       { 
	   _token=$("#_token").val();  
		  swal({
        title: "Are you sure?",
        text: "You want to Register Training!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
		closeOnConfirm: false,
        closeOnCancel: true
        },
    function(isConfirm) {
	   if (isConfirm) {
            swal({
                title: 'Training!',
                text: 'Training application submitted successfully. Our Trainer will review your profile shortly and approve your registration.',
                type: 'success'
            }, function() {
            $.ajax({
               type: "POST",
               url: rootFolder+"trainingReg", // This is what I have updated
               data: {_token:_token,id:id}
			   }).done(function( msg) {  
			   location.reload();
		  });
        });
	  }
  });
 } 
 
 function educationalDetails(id)
        { 
		   $("#ajax_loader").show();
	       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"educationaDetails", 
               data: {_token:_token,id:id }
           }).done(function(msg) {
			 $("#basic-form").html(''); 
		     $("#basic-form").html(msg); 
			 $("#ajax_loader").hide();  
       }); 
   }
   
  function softwareSkil(id)
        {
			
			$("#ajax_loader").show();
	       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"softwareSkil", 
               data: {_token:_token,id:id }
           }).done(function(msg) {
			 $("#basic-form").html(''); 
		     $("#basic-form").html(msg); 
			 $("#ajax_loader").hide();  
       }); 
   }
  function userExperinces(id)
        {
		  $("#ajax_loader").show();	 
	      _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"userExperinces", 
               data: {_token:_token,id:id }
           }).done(function(msg) {
			 $("#basic-form").html(''); 
		     $("#basic-form").html(msg);
			 $("#ajax_loader").hide();   
       }); 
   }
   
 function careerAspirant(id)
        {
			$("#ajax_loader").show();
	       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"careerAspirant", 
               data: {_token:_token,id:id}
           }).done(function(msg) { 
		     $("#basic-form").html(''); 
		     $("#basic-form").html(msg);
			 $("#ajax_loader").hide();  
       }); 
   }
 function getFeedbackForm(id)
        {  $("#ajax_loader").show();
		   _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"feedbackForm", 
               data: {_token:_token,id:id}
           }).done(function(msg) { 
		     $("#large_modal").html(''); 
		     $("#large_modal").html(msg); 
			 $('#large_modal').modal('open'); 
			 $("#ajax_loader").hide();
       }); 
   }
   
     	 
 <!--user feedback save function -->
 function saveFeedback(){  
            training_id      = $("#training_id").val();
			user_role        = $("input[name='user_role']:checked").val();
			comfortable      = $("input[name='comfortable']:checked").val();
			well_explained   = $("input[name='well_explained']:checked").val();
			relevant         = $("input[name='relevant']:checked").val();
			comprehensive    = $("input[name='comprehensive']:checked").val();
			exercise         = $("input[name='exercise']:checked").val();
			well_organized   = $("input[name='well_organized']:checked").val();
			well_paced       = $("input[name='well_paced']:checked").val(); 
			sufficient       = $("input[name='sufficient']:checked").val(); 
			good_mix         = $("input[name='good_mix']:checked").val(); 
			useful_learning  = $("input[name='useful_learning']:checked").val(); 
			knowledgeable    = $("input[name='knowledgeable']:checked").val(); 
			Well_prepared    = $("input[name='Well_prepared']:checked").val(); 
			participants     = $("input[name='participants']:checked").val();
			easy_understand  = $("input[name='easy_understand']:checked").val();
			exercise_comp    = $("input[name='exercise_comp']:checked").val();
			comment          = $("#comment").val(); 
			if($('input[name=user_role]:checked').length ==0)
			{
			alert("Please your Select Role");
			return false;
			}
			if($('input[name=comfortable]:checked').length==0)
			{
			alert("Please Select Training Comfortable");
			return false;
			}
			if($('input[name=well_explained]:checked').length==0)
			{
			alert("Please Select Training Well Explained");
			return false;
			}
			if($('input[name=relevant]:checked').length==0)
			{
			alert("Please Select Training Content relevant");
			return false;
			}
			if($('input[name=comprehensive]:checked').length==0)
			{
			alert("Please Select Training Content Comprehensive");
			return false;
			}
			if($('input[name=easy_understand]:checked').length==0)
			{
			alert("Please Select Training Content Easy to understand");
			return false;
			}
			if($('input[name=exercise]:checked').length==0)
			{
			alert("Please Select Training Exercise Relevant");
			return false;
			}
			if($('input[name=exercise_comp]:checked').length==0)
			{
			alert("Please Select Training  Exercise Comprehensive");
			return false;
			}
			if($('input[name=well_organized]:checked').length==0)
			{
			alert("Please Select Training Exercise Were clear and well-organized");
			return false;
			}
			if($('input[name=well_paced]:checked').length==0)
			{
			alert("Please Select The Training was Well-paced");
			return false;
			}
			if($('input[name=sufficient]:checked').length==0)
			{
			alert("Please Select Training   Breaks were sufficient");
			return false;
			}
			if($('input[name=good_mix]:checked').length==0)
			{
			alert("Please Select Training A good mix between listening and activities");
			return false;
			}
			if($('input[name=useful_learning]:checked').length==0)
			{
			alert("Please Select The activities were useful learning experiences");
			return false;
			}
			if($('input[name=knowledgeable]:checked').length==0)
			{
			alert("Please Select The facilitators/trainer were Knowledgeable");
			return false;
			}
			if($('input[name=Well_prepared]:checked').length==0)
			{
			alert("Please Select The facilitators/trainer were Well-prepared");
			return false;
			}
			if($('input[name=participants]:checked').length==0)
			{
			alert("Please Select The facilitators/trainer were Responsive to participants’ questions");
			return false;
			}
		 swal({
        title: "Are you sure?",
        text: "You want to Save Feedback!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: true
    },
    function(isConfirm) {
		 
        if (isConfirm) {
            swal({
                title: 'Feedback!',
                text: 'Feedback Saved Successfully.!',
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"saveFeedback", // This is what I have updated
               data: {_token:_token,training_id:training_id,user_role:user_role,comfortable:comfortable,well_explained:well_explained,
			   relevant:relevant,comprehensive:comprehensive,exercise_comp:exercise_comp,easy_understand:easy_understand,exercise:exercise,well_organized:well_organized,
			  well_paced:well_paced,sufficient:sufficient,good_mix:good_mix, useful_learning:useful_learning,
			  knowledgeable:knowledgeable,Well_prepared:Well_prepared,participants:participants,comment:comment}
			   }).done(function( msg) {  
			  location.reload();
		    
		  });
        });
	  }
	  
   });	
	
}



 
 
 function allEnablesFeedbackApp(id)
	  {
	 _token=$("#_token").val();
     if(id==1) {   
	 
	   var titletest    ="You want to enable user.";
	   var titlesuccess  ="User Approval enabled Successfully.!";
	 }
	 if(id==2) {   
	 
	   var titletest    ="You want to disable user";
	   var titlesuccess ="User Approval disabled Successfully.!";
	 }
	 if(id==3) {   
	 
	   var titletest    ="You want to delete user";
	   var titlesuccess ="User Approval deleted Successfully.!";
	   
	 }
    var checkValues = $('input[name=feedbackID]:checked').map(function()
            {
                return $(this).val();
            }).get();
		if(checkValues.length<=0)
			{
				alert("Please select at least one Feedback Approval");
				return false;
			}
   	 swal({
		
        title: "Are you sure?",
        text:titletest,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: true
    },
    function(isConfirm) {
		 
        if (isConfirm) {
            swal({
                title: 'Feedback Approval!',
                text: titlesuccess,
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"enablDisablDelete", // This is what I have updated
               data: {_token:_token ,id:id,checkValues:checkValues}
			   }).done(function( msg) {  
  			     $("#multiple37").trigger("reloadGrid", [{current: true}]); 
      			  $('#feedbackID1').prop('checked', false);
      		  });
        });
	  }
	  
   });
 }
 
  function allEnablesPostAsses(id)
	  {
	 _token=$("#_token").val();
     if(id==1) {   
	 
	   var titletest    ="You want to enable Post Assessment Approval!";
	   var titlesuccess  ="Post Assessment Approval enabled Successfully.!";
	 }
	 if(id==2) {   
	 
	   var titletest    ="You want to disable Post Assessment Approval!";
	   var titlesuccess ="Post Assessment Approval disabled Successfully.!";
	 }
	 if(id==3) {   
	 
	   var titletest    ="You want to delete Post Assessment Approval!";
	   var titlesuccess ="Post Assessment Approval deleted Successfully.!";
	   
	 }
    var checkValues = $('input[name=postAssesID]:checked').map(function()
            {
                return $(this).val();
            }).get();
		if(checkValues.length<=0)
			{
				alert("Please select at least one Post Assessment Approval");
				return false;
			}
   	 swal({
		
        title: "Are you sure?",
        text:titletest,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: true
    },
    function(isConfirm) {
		 
        if (isConfirm) {
            swal({
                title: 'Post Assessment Approval!',
                text: titlesuccess,
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"enblDsblDlte", // This is what I have updated
               data: {_token:_token ,id:id,checkValues:checkValues}
			   }).done(function( msg) {  
			    $("#multiple37").trigger("reloadGrid", [{current: true}]); 
				$('#postAssID1').prop('checked', false);
			  
		  });
        });
	  }
	  
   });
 }

function getisableAlert()
{
	 swal({
       title:'Training Disable!',
       text: "Training feedback approval pending from  trainer end Please Wait.",
       html: true,
        type: "warning",
       customClass: 'swal-wide',
       showCancelButton: true,
       showConfirmButton:false
   });
}
  function checkLead()
      {
		var dat= $("#trainerId").val();
		//alert(dat);
		_token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"chkLead", // This is what I have updated
               data: {_token:_token ,dat:dat}
			   }).done(function( msg) { 
                  if(msg!="") {
                         alert(msg);
						 var tm = $("#team option:selected"). val();
						 //alert(tm);
						 getTrainner(tm);
                        }    
			    //$("#multiple37").trigger("reloadGrid", [{current: true}]); 
				//$('#postAssID1').prop('checked', false);
			  
		  });
      }
	 function gridLib()
        {  
		   _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"gridLib", 
               data: {_token:_token}
           }).done(function(msg) {   
		     $("#gridLib").html(''); 
		     $("#gridLib").html(msg); 
			
       }); 
   } 	 
  
   



/* Add Course Start */
	 
	     function  SaveCourseData()
       {   
	       coursename           = $("#coursename").val();
           _token               = $("#_token").val();
		 
            swal({
                title: 'Course!',
                text: 'Course Saved Successfully.!',
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"AddCourse", // This is what I have updated
               data: {_token:_token,coursename:coursename }
			   }).done(function( msg) {  
			   //location.reload();
			   getCourseListwithpop();
		      //$("#successMsg").show();
             //$("#successMsg").html(msg); 
			
		   
		  });
        });
         	
        
     } 
	 
	 /* Add Course Ended */ 
	 
	 
	    function alreadyExistCourse()
   {
	   coursename           = $("#coursename").val();
	   
	    _token=$("#_token").val(); 
		
		if(coursename=="")
           {
              alert("Please Enter Course Name");
			  $("#coursename").focus();
               return false;	
           }
		
		$.ajax({
               type: "POST",
               url: rootFolder+"CheckCourse", // This is what I have updated
               data: {_token:_token,coursename:coursename }
			   }).done(function( msg) {
				   
				  // alert(msg);
				   
				   if(msg=="yes")
				   {
					   alert("This Course is Already Exist");
					   getCourseListwithpop();
		              //$("#successMsg").show();
                      //$("#successMsg").html(msg);
				   }
				   else{
					   
					   SaveCourseData();
				   }		   
			    
			
		   
		  });
		  
   }

function getCourseList()
 { 
 //alert("Hello");
    $("#ajax_loader").show();
    _token=$("#_token").val(); 
    $.ajax({
        type: "POST",
        url: rootFolder+"CourseList", 
        data: {_token:_token}
    }).done(function( msg ) {    
        $("#mydiv").html(msg);
        $('#mydiv').modal('open');
        $("#ajax_loader").hide();
    });
 }
 
 
 function getCourseListwithpop()
 { 
 //alert("Hello");
  $("#ajax_loader").show();
            _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"CourseList", 
               data: {_token:_token}
           }).done(function( msg ) {    
             $("#mydiv").html(msg);
			 //$('#mydiv').modal('open');
			 $("#ajax_loader").hide();
           });
 }
 

/*  $.ajax({
               type: "POST",
               url: rootFolder+"CheckUpdateCollege", // This is what I have updated
               data: {_token:_token,collgname:collgname,add:add}
			   }).done(function( msg) {
				   
				   if(msg=="yes")
				   {
					   alert("This College is Already Exist");
					   //editCollege();
				   }
				   else{
					   
					   UpdateCollege();
				   }		   
			    
			
		   
		  }); */ 


function editCourse(courseId)
{
	$("#ajax_loader").show();     
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"getCourse", 
               data: {_token:_token,courseId:courseId }
           }).done(function( msg ) {		   
             $("#xsmall").html(msg);
			 $('#xsmall').modal('open');
			 $("#ajax_loader").hide();
     });
}


function ChkCourseData(courseId)
{
	
	course       = $("#course").val();
	   courseId = $("#courseId").val();
	   
	_token=$("#_token").val(); 
		
		if(course=="")
           {
              alert("Please Enter Course Title");
			  $("#course").focus();
               return false;	
           }
		   
		   swal({
                title: 'Course!',
                text: 'Course Updated Successfully.!',
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"updateCourse", // This is what I have updated
               data: {_token:_token,course:course,courseId:courseId}
			   }).done(function( msg) {
				   //location.reload();
				   $('#xsmall').modal('close');
				   getCourseList();
				   
		  });
        });
}

/* Pre Question Start Here */

function getQuestionList()
 { 
   $("#ajax_loader").show();
   _token=$("#_token").val();
				
           $.ajax({
               type: "POST",
               url: rootFolder+"QuestionList", 
               data: {_token:_token}
           }).done(function( msg ) {		   
             $("#mydiv").html(msg);
			 $('#mydiv').modal('open');
			 $("#ajax_loader").hide();
           });
 
 }
 
 function editQuestion(questionId)
{
 
	$("#ajax_loader").show();     
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"getQuestion", 
               data: {_token:_token,questionId:questionId }
           }).done(function( msg ) {		   
             $("#xsmall_question").html(msg);
			 $('#xsmall_question').modal('open');
			 $("#ajax_loader").hide();
     });
}

function ChkQuestionData(questionId)
{
	   certification          = $("#certificationId").val();
	   question      = $("#question").val();
	   questionId    = $("#questionId").val();
	   option1       = $("#add-option1").val();
	   option2       = $("#add-option2").val();
	   option3       = $("#add-option3").val();
	   option4       = $("#add-option4").val();
	   marks         = $("#add-marks").val();
	   correct_id     = $("input[name='answer']:checked").val();
	  // assement     = $("input[name='assement']:checked").val();
	   
	   
	   if(correct_id==1)
	   {
		   correct_opt=option1;
	   }
	   
	   if(correct_id==2)
	   {
		   correct_opt=option2;
	   }
	   
	   if(correct_id==3)
	   {
		   correct_opt=option3;
	   }
	   
	   if(correct_id==4)
	   {
		   correct_opt=option4;
	   }
	   
	_token=$("#_token").val();


		
          if(certification==null)
           {
              alert("Please Select Certification");
               return false;  
           }  
		if(question=="")
           {
              alert("Please Enter Question Title");
			  $("#question").focus();
               return false;	
           }
		   
		   if(option1=="")
           {
              alert("Please Enter Option1");
			  $("#add-option1").focus();
               return false;	
           }
		   if(option2=="")
           {
              alert("Please Enter Option2");
			  $("#add-option2").focus();
               return false;	
           }
	 		   
		   if(marks=="")
           {
              alert("Please Enter Marks");
			  $("#add-marks").focus();
               return false;	
           }
		   
		   if(correct_id==undefined)
           {
              alert("Please select correct option");
               return false;	
           }
		   
		   // if(assement==undefined)
     //       {
     //          alert("Please select assessment");
     //           return false;	
     //       }
		   
		   
		   
		   
		   
		   swal({
                title: 'Question!',
                text: 'Question Updated Successfully.!',
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"updateQuestion", // This is what I have updated
               data: {_token:_token,certification_id:certification,question:question,questionId:questionId,option1:option1,option2:option2,option3:option3,option4:option4,marks:marks,correct_id:correct_id,correct_opt:correct_opt}
			   }).done(function( msg) {
				   location.reload();
				   $('#xsmall_question').modal('close');
				   //getQuestionList();
				  // searchQuestion();
				   
		  });
        });
}


    function  SaveQuestionData()
       {   
	   
          certification          = $("#certificationId").val();
          question           = $("#question").val();
          option1        = $("#add-option1").val();
          option2        = $("#add-option2").val();
          option3        = $("#add-option3").val();
          option4        = $("#add-option4").val();
          correct_id  = $("input[name='answer']:checked").val();
          marks          = $("#add-marks").val();
		 //  assement       = $("input[name='assement']:checked").val();
		   

          if(certification==null)
           {
              alert("Please Select Certification");
               return false;	
           }		   
		    
           if(question=="")
           {
              alert("Please Enter Question");
               return false;	
           }
		   
		  if(option1=="")
           {
              alert("Please Enter Option1");
               return false;	
           }
		   
		   if(option2=="")
           {
              alert("Please Enter Option2");
               return false;	
           }
		   
		
		   
		   if(correct_id==undefined)
           {
              alert("Please select correct option");
               return false;	
           } 
		   
		   
		   
		   
		   if(marks=="")
           {
              alert("Please Enter Marks");
               return false;	
           } 
         
       _token=$("#_token").val(); 


        swal({
                title: 'Question!',
                text: 'Question Added Successfully.!',
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
       $.ajax({
               type: "POST",
               url: rootFolder+"AddQuestion", // This is what I have updated
               data: {_token:_token,certification_id:certification,question:question,option1:option1,option2:option2,option3:option3,option4:option4,correct_id:correct_id,marks:marks}
         }).done(function( msg) {
           location.reload();
           $('#xsmall_question').modal('close');
           //getQuestionList();
          // searchQuestion();
             
        });
    });



/*
    			$.ajax({
                   type: "POST",
                   url: rootFolder+"AddQuestion", // This is what I have updated
                   data: {_token:_token,certification_id:certification,question:question,option1:option1,option2:option2,option3:option3,option4:option4,correct_id:correct_id,marks:marks }
    			   }).done(function( res) { 
                   

                      var res = JSON.parse(res);
                   
                        if(res.success){
                            swal({
                                title: 'Questions',
                                text: res.success,
                                type: 'success'
                            },function(){

                               ("#multiple37").trigger("reloadGrid", [{current: true}]); 
                               $('#xsmall_question').modal('close');  
                               location.reload();  
                            });             
                           
                        }else{
                            swal({
                                title: 'Error!',
                                text: 'Unable To save data.',
                                type: 'error'
                            },function(){
                               //("#multiple37").trigger("reloadGrid");  
                               $('#xsmall_question').modal('close');   
                                location.reload(); 
                            });             
                           
                        } 
    		   
    		  });*/

     
 }

function deleteQuestion(id)
   {
	   
	     _token=$("#_token").val();
		 swal({  title: "Are you sure?",
		text: "You want Delete Question",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes',
		cancelButtonText: "No"
		}, 
     function(){  
           $.ajax({
               type: "POST",
             url: rootFolder+"deleteQuestion", 
               data: {_token:_token,id:id }
           }).done(function( msg ) {
              // getQuestionList();			   
             //$("#multiple37").trigger("reloadGrid", [{current: true}]);
			}); 
           }); 
   
   }
   
   
   function searchQuestion()
   {   
    coursesId=$('#coursesId').val(); //alert( coursesId);
   _token=$("#_token").val();
	
	if(coursesId==null)
	{
		alert("Please Select Course First");
		$("coursesId").focus();
		return false;
	}
	
	else {
	
				
           $.ajax({
               type: "POST",
               url: rootFolder+"QuestionsearchList", 
               data: {_token:_token,coursesId:coursesId}
           }).done(function( msg ) { 
		     $("#searchCoursList").html(''); 		   
             $("#searchCoursList").html(msg);
			
           }); 
		   
	}
	   
	    /*  $("#ajax_loader").show();     
       _token=$("#_token").val();
	   
          $.ajax({
               type: "POST",
               url: rootFolder+"getQuestion", 
               data: {_token:_token,questionId:questionId }
           }).done(function( msg ) {		   
             $("#small_modal").html(msg);
			 $('#small_modal').modal('open');
			 $("#ajax_loader").hide();
     });  */
   
   }
   
function getSequirityCode(certificationId){


     $("#ajax_loader").show();
       _token=$("#_token").val(); 
      // alert(_token);return false;

           $.ajax({
               type: "POST",
               url: rootFolder+"sequirityPopup", 
               data: {_token:_token,id:certificationId}
           }).done(function(msg) { 
             $("#xsmall").html(''); 
             $("#xsmall").html(msg); 
           $('#xsmall').modal('open'); 
           $("#ajax_loader").hide();
       }); 
  }

  function ChkCode(){


     $("#ajax_loader").show();
     _token=$("#_token").val(); 
     certificationId = $('#certificationId').val();
   
      code = $('#code').val();





      $.ajax({
               type: "POST",
               url: rootFolder+"checkCode", 
               data: {_token:_token,id:certificationId,code:code}
           }).done(function(msg) { 


          var res = JSON.parse(msg);
                   
                if(res.success){
                    swal({
                        title: 'Code Verification!',
                        text: 'Code verified Successfully.',
                        type: 'success'
                    },function(){
                       
                               $('#xsmall').modal('close');  
                               location.reload();  
                    });             
                   
                }else{
                    swal({
                        title: 'Error!',
                        text: 'Unable To verified code.',
                        type: 'error'
                    },function(){
                       
                               $('#xsmall').modal('close');  
                               location.reload();  
                    });             
                   
                }  


       }); 


  }




   
 function getPreAssessmentForm(id1,id2)
        {   alert(7700);   
          $("#ajax_loader").show();
		   _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"preAssessment", 
               data: {_token:_token,id:id1,training_id:id2}
           }).done(function(msg) { 
		     $("#mydiv").html(''); 
		     $("#mydiv").html(msg); 
			 $('#mydiv').modal('open'); 
			 $("#ajax_loader").hide();
       }); 
   }
 function getPostAssessmentForm(id1,id2)
        {  $("#ajax_loader").show();
		   _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"postAssessment", 
               data: {_token:_token,id:id1,training_id:id2}
           }).done(function(msg) { 
		     $("#mydiv").html(''); 
		     $("#mydiv").html(msg); 
			 $('#mydiv').modal('open'); 
			 $("#ajax_loader").hide();
       }); 
   }

/* Pre Question Ended Here */


<!-- placemenr funtion  start-->


 function getPlacementAssmntForm(id1,id2)
        {  $("#ajax_loader").show();
		   _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"plceAssessment", 
               data: {_token:_token,id:id1,training_id:id2}
           }).done(function(msg) { 
		     $("#mydiv").html(''); 
		     $("#mydiv").html(msg); 
			 $('#mydiv').modal('open'); 
			 $("#ajax_loader").hide();
       }); 
   }
   
function  getAddexamForm()
       {   
	    $("#ajax_loader").show();    
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
			   data: {_token:_token },
               url: rootFolder+"AddExamForm",
			   success: function(res){ 
			      $('#mydiv').html('');
				   $('#mydiv').html(res);
				    $('#mydiv').modal('open');
			   }  
			
		     });
			  $("#ajax_loader").hide();
       
     }  
	 
function  SavePlcExam()
       {   
	       trainingId           = $("#trainingId").val();
		   LeadtrainerId        = $("#LeadtrainerId").val();
		   certificate_format   = $("#certificate_format").val(); 
           team                 = $("#team").val();       
           trainer              = $("#trainerId").val();
		   //team_lead            = $('select[name=trainerId]').attr('rel');
           category             = $("#category").val();  
           dateId                = $("#datetime").val(); 
           institute            = $("#instituteId").val();  
           department           = $("#department").val(); 
           instLocation         = $("#instLocation").val();
           semester             = $("#semester").val(); 
           _token               = $("#_token").val(); 
           course               = $("#coursesId").val();
		   noOfQuestions        = $("#noOfQuestions").val();
		    totalTime           = $("#totalTime").val();

//alert(trainer);	
//alert(team_lead);	   
		    
           if(certificate_format=="")
           {
              alert("Please Select Certificate Format");
               return false;	
           }
           if(team=="")
           {
              alert("Please Select Team");
               return false;	
           }
		   if(LeadtrainerId=="")
           {
              alert("Please Select Lead Trainer");
               return false;	
           }
           if(trainer=="")
           {
              alert("Please Select Support recuiter");
               return false;	
           }
           if(category=="")
           {
              alert("Please Enter Category");
               return false;	
           }
           if(dateId=="")
           {
              alert("Please Select Date From/Date To");
               return false;	
           }
           if(course=="" || course==null)
           {
              alert("Please Select Course");
               return false;	
           }
           if(institute=="" || institute=="null")
           {
              alert("Please Select Institute Name");
               return false;	
           }
           if(instLocation=="")
           {
              alert("Please Enter Institute Location");
               return false;	
           }
           if(instLocation=="")
           {
              alert("Please Enter Institute Location");
               return false;	
           }
           if(department=="")
           {
              alert("Please Enter Department");
               return false;	
           }
           if(semester=="")
           {
              alert("Please Enter Semester");
               return false;	
           }
        if(semester=="")
           {
              alert("Please Enter Semester");
               return false;	
           }
		  if(noOfQuestions=="")
           {
              alert("Please Enter No of Questions");
               return false;	
           }
		   if(totalTime=="")
           {
              alert("Please Enter Exam Time");
               return false;	
           } 
       swal({
        title: "Are you sure?",
        text: "You want to save Placement Exam!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
		closeOnConfirm: false,
        closeOnCancel: true
       },
    function(isConfirm) {
		 
        if (isConfirm) {
            swal({
                title: 'Placement !',
                text: 'Placement Exam Save Successfully.',
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"AddSaveForm", // This is what I have updated
               data: {_token:_token,certificate_format:certificate_format,team:team,trainer:trainer,category:category,dateId:dateId,
               institute:institute,semester:semester,instLocation:instLocation,course:course,department:department,
			   trainingId:trainingId,LeadtrainerId:LeadtrainerId,noOfQuestions:noOfQuestions,totalTime:totalTime }
			   }).done(function( msg) {  
			   location.reload();
		      $("#successMsg").show();
             $("#successMsg").html(msg); 
			
		   
		  });
        });
	  }
	  
   });
         	
        
     } 	 
function  getPlacementReg(id)
       {     
       _token=$("#_token").val(); 
           $.ajax({
               type: "POST",
               url: rootFolder+"ExamView", 
               data: {_token:_token,id:id }
           }).done(function( msg ) {    
             $("#mydiv").html(msg);
			 $('#mydiv').modal('open');
           });
       
     }
 function  getRegPlacement(id)
       { 
	   _token=$("#_token").val();  
		  swal({
        title: "Are you sure?",
        text: "You want to Register Placement Drive!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
		closeOnConfirm: false,
        closeOnCancel: true
        },
    function(isConfirm) {
	   if (isConfirm) {
            swal({
                title: 'Placement!',
                text: 'Placement application submitted successfully.  Our recuiter will review your profile shortly and approve your registration.!',
                type: 'success'
            }, function() {
            $.ajax({
               type: "POST",
               url: rootFolder+"PlacementReg", // This is what I have updated
               data: {_token:_token,id:id}
			   }).done(function( msg) {  
			  location.reload();
		  });
        });
	  }
  });
 } 
 
 function allEnablesPlacementApp(id)
	  {
	 _token=$("#_token").val();
     if(id==1) {   
	 
	   var titletest    ="You want to enable Placement Approval!";
	   var titlesuccess  ="Placement Approval enabled Successfully.!";
	 }
	 if(id==2) {   
	 
	   var titletest    ="You want to disable Placement Approval!";
	   var titlesuccess ="Placement Approval disabled Successfully.!";
	 }
	 if(id==3) {   
	 
	   var titletest    ="You want to delete Placement Approval!";
	   var titlesuccess ="Placement Approval deleted Successfully.!";
	   
	 }
       if(id==4) {   
	 
	   var titletest    ="You want to Approval for Selection!";
	   var titlesuccess ="Approval for Selection save Successfully.!";
	   
	 }
	 if(id==5) {   
	 
	   var titletest    ="You want to Disapproval for Selection!";
	   var titlesuccess ="Disapproval for Selection save Successfully.!";
	   
	 }
    var checkValues = $('input[name=ApprovalModelID]:checked').map(function()
            {
                return $(this).val();
            }).get();
		if(checkValues.length<=0)
			{
				alert("Please select at least one Placement Approval");
				return false;
			}
   	 swal({
		
        title: "Are you sure?",
        text:titletest,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor:'#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: true
    },
    function(isConfirm) {
		 
        if (isConfirm) {
            swal({
                title: 'Placement Approval!',
                text: titlesuccess,
                type: 'success'
            }, function() {
           _token=$("#_token").val(); 
			 $.ajax({
               type: "POST",
               url: rootFolder+"enablDisablDeletePlace", // This is what I have updated
               data: {_token:_token ,id:id,checkValues:checkValues}
			   }).done(function( msg) {  
			    $("#multiple37").trigger("reloadGrid", [{current: true}]); 
			  $('#feedbackID1').prop('checked', false);
		  });
        });
	  }
	  
   });
 }	

  