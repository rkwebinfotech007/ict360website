

    <li class="@if(Route::current()->getName()=='dashboard') active @endif">
      <a class="dropdown-menu dashboard active" href="{{route('dashboard')}}">
          <i class="material-icons">dashboard</i>
          <span>Dashboard</span>
      </a>
    </li>
        
    
    

 <li class="@if(Route::current()->getName() == 'admin-blog') active @endif">
      <a class="" href="{{route('admin-blog')}}">
         <i class="material-icons fa fa-user"></i>
           <span> Blog</span>
     </a>
 </li> 
  <li class="@if(Route::current()->getName() == 'admin-newsletter') active @endif">
      <a class="" href="{{route('admin-newsletter')}}">
         <i class="material-icons fa fa-user"></i>
           <span> NewsLetter</span>
     </a>
 </li> 
 
 <li class="@if(Route::current()->getName() == 'contactList') active @endif">
      <a class="" href="{{route('contactList')}}">
         <i class="material-icons fa fa-user"></i>
           <span>Contact Us Data</span>
     </a>
 </li> 
 

        
 






