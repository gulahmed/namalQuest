<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){

    }
    
    public function apply_admission(Request $request){
      //$application = new App\Application([
      //'user_id' => Auth::user()->id,
      //'vacancy_id' => $vacancy_id,
      //]);
      //$application->save();

      $success = 'Application Submitted';
      return redirect()->back()->with('success', $success);
    }


}
