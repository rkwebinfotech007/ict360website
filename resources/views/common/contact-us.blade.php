<div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="col-sm-12">
                <form class="floatinglabel" id="contactUsForm" onsubmit="return contactUsFormSubmit(event)">
                  @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group has-float-label">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter Name" onkeypress="return ValidateAlpha(event);" required />
                                <span class="spanErrorClass" id="name_error"></span>
                                <!-- <label for="name">Name</label> -->
                               
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group has-float-label">
                                <input class="form-control" name="email" id="email" type="text" placeholder="Enter Email" required />
                                <span class="spanErrorClass" id="email_error"></span>
                                <!-- <label for="email">E-Mail</label> -->
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group has-float-label">
                                <input class="form-control" name="number" id="number" type="text" maxlength="10"
                                    placeholder="Enter Contact Number" onkeypress="return isNumberKey(event,this.id);" required />
                                    <span class="spanErrorClass" id="number_error"></span>
                                <!-- <label for="number">Number</label> -->
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-float-label">
                                <input class="form-control" name="organization" id="organization" type="text"
                                    placeholder="Enter organization" required />
                                <!-- <label for="organization">Organization</label> -->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-float-label">
                                <input class="form-control" name="city" id="city" type="text" placeholder="Enter City" onkeypress="return ValidateAlpha(event);" required />
                                <!-- <label for="city">City</label> -->
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group has-float-label">
                                <textarea class="form-control" name="message" id="message" rows="4"
                                    placeholder="Enter Message" required ></textarea>
                                <!-- <label for="message">Message</label> -->
                            </div>
                        </div>
                        <div class="col-sm-12 text-lg-right text-center">
                            <button class="btn-sub" id="contactUsSubmit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

     <script>
           // form validation scripts // 

      // Function to accept only alphabets start     
        function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
             
            return false;
                return true;
        }
     // Function to accept only alphabets end

     //function accept only integer start
    
        function isNumberKey(evt,id)
       {
        try{
            var charCode = (evt.which) ? evt.which : event.keyCode;
      
            if(charCode==46){
                var txt=document.getElementById(id).value;
                if(!(txt.indexOf(".") > -1)){
        
                    return false;
                }
            }
            if (charCode > 31 && (charCode < 48 || charCode > 57) )
                return false;

            return true;
        }catch(w){
            //alert(w);
        }
    }

</script>

<script>

function contactUsFormSubmit(event)
  {
           
      event.preventDefault();

      var name         =  $('#name').val();
      var email        =  $('#email').val();
      var number        =  $('#number').val();
      var emailpattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
      var namepatt = /^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;

      if(name.length < 3){

            $("#name_error").css("display","block");
            $("#name_error").html('Please enter correct parent name');
            return false;
         }
         else{
           $("#name_error").css("display","none");
           $("#name_error").html('');
         }

     if(!namepatt.test(name)){

        $("#name_error").css("display","block");
        $("#name_error").html('Please enter correct parent name');
         return false;
     }
     else{
       $("#name_error").css("display","none");
       $("#name_error").html('');
     }

      if(number.length !=10){

             $("#number_error").css("display","block");
            $("#number_error").html('Please enter correct phone no.');
            return false;
         }
         else{
          $("#number_error").css("display","none");
          $("#number_error").html('');
         }

       if(!emailpattern.test(email)){
            $("#email_error").css("display","block");
            $("#email_error").html('Please enter correct email.');
             return false;
         }
         else{
            $("#email_error").css("display","none");
           $("#email_error").html('');
         }
         
       var formdata = $('#contactUsForm').serialize();
       console.log(formdata);
       //var request_url = $('#')
       var _token  = "{{ csrf_token() }}"; 
      
                    $('#contactUsSubmit').html('Please Wait..');
                    $("#contactUsSubmit").attr("disabled", true);
                    $.ajax({
                        type: "POST",
                        url: '{{ route('saveContactUsData') }}', 
                        data: formdata,//{formdata,_token:_token},
                    }).done(function( msg ) {
                    var data = JSON.parse(msg);
                    // alert(data);
                      if(data == "success"){
                        swal({
                              title: 'Success!',
                              text: 'Data submitted successfully',
                              type: "success"
                            },function(){
                              $('#contactUsForm')[0].reset();  
                              $('#contactUsSubmit').html('Submit');
                              $("#contactUsSubmit").attr("disabled", false);
                            }); 
                        }else{
                         swal({
                              title: 'Fail!',
                              text: 'Something went wrong',
                              type: "error"
                            },function(){
                              $('#contactUsForm')[0].reset();  
                              $('#contactUsSubmit').html('Submit');
                              $("#contactUsSubmit").attr("disabled", false);
                            });
                      }
                });
        
    }
       
</script>