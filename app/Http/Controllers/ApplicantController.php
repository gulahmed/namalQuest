<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ApplicationSubmitted;
use Auth;
use App\SectionStatus;
use App\Profile;
use Mail;

class ApplicantController extends Controller
{
    public function index(){
      $user_sections = SectionStatus::where('applicant_id', Auth::user()->id);
      return view ('applicant.submission',compact('user_sections'));
    }

    public function apply_admission(Request $request){

      $user= Auth::user();
      $status = Profile::application_submission_status();
      if ($status!=1)
        {
         Profile::where('applicant_id', '=', $user->id)->update(array('application_status' => 1));

         Mail::to($user)->send(new ApplicationSubmitted($user));
         $success = 'Application Submitted Succesfully';
         return redirect('/apply/submitted')->with('success', $success);
           }
           else {
             $message = "You already have submited the application";
             return redirect()->back()->with('message',$message);

           }

    }


}
