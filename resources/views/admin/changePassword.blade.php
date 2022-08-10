{!! Html::script('public/admin/js/plugins.js') !!}      
  {!! Html::style('public/admin/css/daterangepicker.css') !!}
  {!! Html::script('public/admin/js/jquery-3.2.1.min.js') !!}   
  {!! Html::script('public/admin/js/materialize.min.js') !!} 

<div class="modal-header">
  <h1>Change Password</h1>
  <button type="button" class="modal-action modal-close close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" class="modal-action modal-close white-text">x</span> </button>
</div>
<div class="modal-content" id="Allocate_Schools">
  <p id="successMsg" class="green-text" style="display:none;"></p>
  <div class="create_student">
    <div class="row">
      <div class="row">
        <div class="input-field col s12"> <i class="material-icons prefix">lock</i>
          <label>Current Password</label>
          <input name="usersCurrPass" type="password" id="usersCurrPass" onchange="checkCurrentPass()">
          <div class="input-field error" id="cureentmsg"></div>

        </div>
         
      </div>
      <div class="row">
        <div class="input-field col s12"> <i class="material-icons prefix">lock_outline</i>
          <label>New Password</label>
          <input name="" type="password" minlength="6" id="usersNewPass" />
          <div class="input-field error" id="usersNewPassmsg">
        </div>
         
      </div>
      <div class="row"> 
        <div class="input-field col s12"> <i class="material-icons prefix">lock_outline</i>
          <label>Confirm Password</label>
          <input name="" type="password" minlength="6" id="usersConfPass" />
          <!-- <div class="input-field error" id="usersConfPassmsg"> -->
            <span id="usersConfPassm" class="red-text"></span>
        <!-- </div> -->
         
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal-footer">
  <button class="btn green darken-1 mr-1 waves-effect waves-light" type="button"  onclick="upddatePassword()" name="action" >Change <i class="material-icons right">send</i> </button>
  <a href="#!" class=" modal-action modal-close btn waves-effect waves-light red accent-2">close</a> </div>

  <script type="text/javascript">

     function checkConfirmPass()
      {     
      _token         = $("#_token").val();
      usersNewPass   = $("#usersNewPass").val();
      usersConfPass  = $("#usersConfPass").val();

      if (usersConfPass != "")
      {
      if (usersNewPass != usersConfPass)
      {
      $("#usersNewPassmsg").html("<span class='red-text'>New Password not matching</span>");
      $("#usersNewPass").val('');
      }else{
       $("#usersNewPassmsg").html("<span class='green-text'><i class='material-icons dp48'>check</i></span>");
      }
     }
     
 }
     
  </script>
