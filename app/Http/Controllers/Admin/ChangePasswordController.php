<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Model\UserAdminModel as Users;
use DB;
use Auth;

class ChangePasswordController extends Controller
{
	
	protected $userTable;

	public function __construct(){
		$this->userTable = new Users();
	}

    public function changePassword(Request $req) 
    {
	  return view('admin.changePassword')->with("data",$req->id);
    }
  public function checkCurrentPass(Request $req)
		 {
		  $checkPassArray=array(
		                     "password"=>"'".md5(trim($req->usersCurrPass))."'",
							  "id"=>Session()->get('user_id'));
		  $data = $this->userTable->checkPassword($checkPassArray);
		  if(count($data)==0)
		  {
			  $msg="<span class='red-text'>Wrong! Plese Enter Correct Password</span>";
		  } else{
			  $msg="<span class='green-text'><i class='material-icons dp48'>check</i></span>";
		  }
		  return $msg;	
		 }
		public function updateChangePass(Request $req)
		 {
		 	// echo "<pre>";
		 	// print_r($req->post()); die;
		   if($req->usersNewPass != $req->usersConfPass)
		   {
		   	  return json_encode("unsuccess");
		   }
		   else
		   {
		   	 $checkPassArray=array("id"=>Session()->get('user_id'));
		     $data = $this->userTable->updatePassword($checkPassArray,$req->usersNewPass);
		     return json_encode("success");
		   }
		   
		  	
		 }


	################### student change password #################
	
  public function studentChangePassword(Request $req) 
    {
	   return view('studentChangePassword')->with("data",$req->id); 
    }
  public function checkCurrentPassv(Request $req)
		 {
		  $checkPassArray=array(
		                     "password"=>"'".md5(trim($req->usersCurrPass))."'",
							  "id" => Auth::user()->id);
		  $data = $this->userTable->checkPassword($checkPassArray);
		  if(count($data)==0)
		  {
			  $msg="<span class='red-text'>Wrong! Plese Enter Correct Password</span>";
		  } else{
			  $msg="<span class='green-text'><i class='material-icons dp48'>check</i></span>";
		  }
		  return $msg;	
		 }
		public function updateStuChangePass(Request $req) 
		 {
		  $condition = array("id"=> Auth::user()->id);
		  $password  =  Hash::make($req->usersNewPass);
		  //echo $req->usersNewPass; die;
		  $data = DB::table('users')->where($condition)->update(['password'=>$password]); print_r($data);
		  	
		 }


	public function gridLib(Request $req)
		 {
		  
		  return view('gridLib');	
		 }	 
		 
}
