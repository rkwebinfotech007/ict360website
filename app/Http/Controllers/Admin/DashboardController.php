<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
class DashboardController extends Controller
{
    //

		function index(Request $req){

			return view('admin.dashboard');
		}

		 // public function validate_user(Request $req) {
   //      print_r($req);
   //  }
   
    public function enquiryList(Request $req){
		if($req->isMethod('GET')) {
            if(session::get('user_type') == 'ADM'){
              return view('admin.price.index');
            }else{
              return redirect('/admin/login');
            }
        }

        //if ($req->isMethod('POST')) {
            $data = DB::table('pricing_enquiry')->get();
			//dd($data[0]->email);
            $i = 0;
            $result=[];
            foreach($data as $r) 
            {		
                $result[$i]     = array(
                    'name'             =>$r->name,
                    'email'            =>$r->email,
                    'phone'            =>$r->phone,
					'message'		   =>$r->message,
					'created_at'		   =>date('Y-m-d',strtotime($r->created_date)),
                );
                $i++;
            }
             return json_encode($result);
    }
	
	public function contactList(Request $req){
		if($req->isMethod('GET')) {
            if(session::get('user_type') == 'ADM'){
              return view('admin.contact.index');
            }else{
              return redirect('/admin/login');
            }
        }
		$data = DB::table('contactus_details')->get();
            $i = 0;
            $result=[];
            foreach($data as $r) 
            {		
                $result[$i]  = array(
                    'name'    =>$r->name,
                    'email' => $r->email,
                    'number' => $r->number,
                    'organization' =>$r->organization,
                    'city' =>$r->city,
                    'message'		 =>$r->message,
                    'created_at' =>date('d-m-Y',strtotime($r->created_at)),
                   );
                $i++;
            }
             return json_encode($result);
	}

}
