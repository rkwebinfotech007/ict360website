<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\User;
use App\Mail\StudentRegisterMail;
use App\Mail\UserRegistrationTeamMail;
use App\Mail\ReferStudentMail;
use App\Mail\ReferTeamMail;

class UserRegistration extends Controller
{
    public function registrationView($partner_id='') 
    {
        $reference_id = explode('_',$partner_id);
        // print_r($reference_id); die;
        $student_referred_by = '';
        $partner_id = '';

        if(count($reference_id) > 1)
            {
              $student_referred_by = $this->urlsafe_b64decode($reference_id[1]);
            }
            else
            {
              $partner_id = base64_decode($reference_id[0]);
            }

        
        return view('registration-view')->with('partner_id',$partner_id)->with('student_referred_by',$student_referred_by);
        // return view('auth.register')->with('partner_id',$partner_id);
    }

    public function saveUser(Request $request)
    {

     if($request->email!=""){
        $data = [
            'parent_name' => $request->parent_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'student_name' => $request->student_name,
            'age' => $request->age,
            'course' => $request->course,
            'city' => $request->city,
            'school' => $request->school,
            'sourse' => $request->sourse,
            'have_laptop' => $request->have_laptop?? '',
            'partner_id' => $request->partner_id?? null,
            'student_referred_by' => $request->student_referred_by?? null,
        ];

        $inser =  User::create($data);

        if($inser)
        { 
           $partner = DB::table('partner_details')->select('agency_name')->where('id',$request->partner_id)->first();
           $data['partner_name'] = ''; 
           if(!empty($partner && $partner->agency_name!=''))
           {
            $data['partner_name'] = $partner->agency_name; 
           }
           // mail send to user
            $mail1 = $this->sendMailToUser($request->email,$data);

            // mail send to internal team
            $mail2 =  $this->sendMailToInternalTeam($data);

            return json_encode("success");
        }
        else
        {
           return json_encode("unsuccess");
        }
}
    }

    public function sendMailToUser($mailTo,$data)
    {
        Mail::to($mailTo)->bcc('ankit.aggarwal@arkinfo.in')->send(new StudentRegisterMail($data));
        if (Mail::failures()) {
            return false;
        }else{
        return true;
        }
    }

    public function sendMailToInternalTeam($data)
    {
        Mail::to('info@mbxd2h.in')->bcc('musharraf.khan@arkinfo.in')->send(new UserRegistrationTeamMail($data));
        if (Mail::failures()) {
            return false;
        }else{
        return true;
        }
    }

    // base64 encoding function 
    function urlsafe_b64decode($string) {
        $data = str_replace(array('#','@'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

	
 public function saveUserRefer(Request $request)
    {

     if($request->email!=""){
        $data = [
            'name' => $request->parent_name,
            'email_id' => $request->email,
            'contact_no'=> $request->phone,
            'city' => $request->city,
            'created_at' =>date('Y-m-d'),
        ];
		
		

       $inser=DB::table('referuser')->insert($data);
        if($inser)
        { 
           
           
           //mail send to user
           $mail1 = $this->sendMailToReferUser($data);

           // mail send to internal team
            $mail2 =  $this->sendMailToInternalTeamRefer($data);

            return json_encode("success");
        }
        else
        {
           return json_encode("unsuccess");
        }
}
    }
	
	public function sendMailToReferUser($data)
    {
        Mail::to($data['email_id'])->bcc('musharraf.khan@arkinfo.in')->send(new ReferStudentMail($data));
        if (Mail::failures()) {
            return false;
        }else{
        return true;
        }
    }

    public function sendMailToInternalTeamRefer($data)
    {
        Mail::to('virendra.kumar@arkinfo.in')->bcc('musharraf.khan@arkinfo.in')->send(new ReferTeamMail($data));
        if (Mail::failures()) {
            return false;
        }else{
        return true;
        }
    }

}
