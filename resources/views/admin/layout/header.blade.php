

 <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color">
   
      <div class="nav-wrapper">
      
        <ul class="right hide-on-med-and-down">
          <li> <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown"> <span class="flag-icon flag-icon-gb"></span> </a> </li>
          <li> <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" > <span class="user_head">Hi! <span class="green-text"> Admin <!-- {{  Session()->get('name')}} --></span>&nbsp;| </span><span class="avatar-status avatar-online tooltipped" data-position="bottom" data-delay="20" data-tooltip= {{ Session()->get('name')}}> <img src="<?php if(!session()->get('profile_path')) { echo url('public/admin/images/noImageFound.png');} else{ echo url('images')."/".trim(session()->get('profile_path'));} ?> " alt="avatar" /> <i ></i> </span> </a> </li>
         <!-- <li> <a href="#" class="waves-effect waves-block waves-light"> <i class="material-icons red-text text-darken-2 tooltipped" data-position="bottom" data-delay="20" data-tooltip="Helpdesk">headset_mic</i></a></li>
          <li> <a href="#" class="waves-effect waves-block waves-light"> <i class="material-icons red-text text-darken-2 tooltipped" data-position="bottom" data-delay="20" data-tooltip="My Schedule">perm_contact_calendar</i></a></li>
          --> <li> <a  onclick="getChangePassword('{{Session()->get('user_id')}}')" class="waves-effect waves-block waves-light"> <i class="material-icons black-text text-darken-2 tooltipped" data-position="bottom" data-delay="20" data-tooltip="Change Password">lock_open</i></a> </li>
         <li> <a href="{{ route('logout') }}" class="waves-effect waves-block waves-light"> <i class="material-icons black-text text-darken-2 tooltipped" data-position="bottom" data-delay="20" data-tooltip="Log Out">exit_to_app</i></a> </li>
        </ul>
    </div>
    </nav>
    </div>
      

</header>
    <!-- HORIZONTL NAV START-->
   <div id="small_modal" class="modal  modal-fixed-footer modal-fixed-header"></div>
   
  <script>

  $(function() {
    $('.modal').modal();
  });
 
</script>
<div class="preloader-wrapper small active loader" id="ajax_loader" style="display:none">
    <div class="spinner-layer spinner-green-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>


