<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ApplicationSubmitted;
use Auth;
use App\SectionStatus;

class ApplicantController extends Controller
{
    public function index(){
      $user_sections = SectionStatus::where('applicant_id', Auth::user()->id);
      return view ('applicant.submission',compact('user_sections'));
    }

    public function apply_admission(Request $request){

      $user= Auth::user();

      \Mail::to($user)->send(new ApplicationSubmitted($user));


      $success = 'Application Submitted';
      return redirect()->back()->with('success', $success);
    }


}
