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
         if(msg == "<span class='red-text'>Wrong! Plese Enter Correct Password</span>")
         {
           $("#usersCurrPass").val('');
         }
         
        
       }); 
   } 

  

  function checkNewConfirmPass()
        {  
      _token         = $("#_token").val();
      usersNewPass   = $("#usersNewPass").val();
      usersConfPass  = $("#usersConfPass").val();
    if (usersNewPass !=usersConfPass) 
      {
      $("#usersConfPassmsg").html('Confirm password not matching');
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

           if(usersNewPass.length < 6)
           {
              alert("New Password should be min 6 character");
               return false;  
           }

           if(usersConfPass=="")
           {
              alert("Please Enter Confirm Password");
               return false;  
           }

           if(usersConfPass != usersNewPass)
           {
              alert("New password and confirm password should be same!");
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
             
       $.ajax({
               type: "POST",
               url: rootFolder+"updateChangePass", // This is what I have updated
               data: {_token:_token,usersCurrPass:usersCurrPass,usersNewPass:usersNewPass,usersConfPass:usersConfPass}
         }).done(function( msg) {
           var data = JSON.parse(msg);
           if(data == "success") 
           {
              swal({
                title: 'Password!',
                text: 'Password Saved Successfully.!',
                type: 'success'
               }, function() {
                location.reload();
                
              });
           }
           else if(data == "unsuccess")
           {
             swal({
                title: 'Fail!',
                text: 'New password and confirm password should be same!',
                type: 'warning'
               }, function() {

              });
           }
         
        });
    }
    
   });
   } 