<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Mail\ContactUsMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveContactUsData(Request $request)
    {
        // print_r($request->post()); die;

       if($request->email!=""){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'organization' => $request->organization,
                'city' => $request->city,
                'message' => $request->message,
            ];

            $inser =  DB::table('contactus_details')->insert($data);

            if($inser)
            { 
                Mail::to('info@mbx.co.in')->bcc('ritesh.k@arkinfo.in')->send(new ContactUsMail($data));
                    if (Mail::failures()) {
                        return json_encode("unsuccess");
                    }else{
                        return json_encode("success");
                    }
            }
            else
            {
              return json_encode("unsuccess");
            }
       }
    }
}
