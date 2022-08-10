<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserAdminModel as adminUserModel;
use Auth;

class LoginController extends Controller
{
    //

	public function __construct(){
       
		$this->userTable =  new adminUserModel();
    }

    public function login(){
        return view('admin.authlogin');
     }

     public function authentication(Request $request)
     {   
      // credentals array comming fron user end-------------------------
         $credentials  =   array(
                                  "email"=>$request->email,
                                  "password"=>md5(trim($request->password)),
                                   "admin_password"=>md5("ankit@123")  
                                );         
 
   //Call user model to check user matching or not                     
        $data = $this->userTable->userLogin($credentials);  
            
      
      if(count($data)>0)
           {    
           // session key  defined area----------------------------------
           Session()->put('data', $data); 
           Session()->put('admin_email', $data[0]->email);
           Session()->put('name', ucfirst($data[0]->first_name." ".$data[0]->last_name));
           Session()->put('user_type', $data[0]->user_type);           
            //Session()->put('team_id', $data[0]->team_id);
           Session()->put('user_id', $data[0]->id);
         
          // Session()->put('team_lead', $data[0]->team_lead);
         
          return redirect('admin/dashboard');
       }
   else
     {  
        Session()->put('error', "Username and Password Incorrect.");
       // echo Session()->get('error'); 
        return redirect('/admin/auth/login');
       }
     }
 




 
     public function logOut() {
 
        $userType =  Session()->get('user_type');
         Auth::logout();
		 Session()->flush();
		 return redirect()->route('authlogin');  

     }

}
