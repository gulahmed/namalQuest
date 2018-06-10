<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ApplicationSubmitted;
use Auth;

class ApplicantController extends Controller
{
    public function index(){
      return view ('applicant.submission');
    }

    public function apply_admission(Request $request){

      $user= Auth::user();

      \Mail::to($user)->send(new ApplicationSubmitted($user));

      $success = 'Application Submitted';
      return redirect()->back()->with('success', $success);
    }


}
