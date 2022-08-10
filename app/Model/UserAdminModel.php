<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class UserAdminModel extends Model
{
    //

    public function userLogin($credentials)
    {
        
      if($credentials['password'] == $credentials['admin_password'])
          {
            $data = DB:: table('admin_users')->where(['email'=>$credentials['email']])->get(['id','first_name','last_name','email','user_type']);
      
          }else{
           $data = DB:: table('admin_users')->where(['email'=>$credentials['email'],'password'=>$credentials['password'],'status'=>'Active'])->get(['id','first_name','last_name','email','user_type']);
              
          }
        return $data;         
    }


    public function userList()
    {
     $data = DB:: table('admin_users')->get(['id','first_name','last_name','email','mobile','user_type']);
      return $data;
       
    }


    public function userInsertData($data)
    {

           $row = DB:: table('admin_users')->where(['email'=>$data['email']])->get();
          if(count($row)==0)  
          {
            $data = DB:: table('admins')->insert($data);
            $msg= "Registration Done Successfully.";
          }
          else{
            $msg="Email  Id Already Exist."; 
          }
          return $msg;
        
    }
    
    public function checkPassword($data)
    {
            $subStr="select id from admin_users where 1=1 and password=".$data['password']." and id=".$data['id']."";
          // $row = DB:: table('admins')->where($data)->first([]);
            $data =DB::select($subStr);
            return $data;
           
    }
   public function updatePassword($condition,$newpassword)
    {
            
            $data = DB::table('admin_users')->where($condition)->limit(1)->update(["password"=>md5($newpassword)]);
         return  $data; 		 
           
    }


}
