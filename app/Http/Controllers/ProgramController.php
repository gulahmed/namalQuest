<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;
use Auth;
use App\TestDetails;
use Session;
use Carbon\Carbon;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicant.programs');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validate = $request->validate([
          'test_roll_number' => 'required',
          //'test_total_marks' => 'required',
          'test_obtained_marks' => 'required',
      ]);

      $applicant_id = Auth::User()->id;
      $prefs =$request->get('program_pref');

      $data = array(
          array('applicant_id'=>$applicant_id, 'program_name'=>$prefs[0], 'preference_order'=>1),
          array('applicant_id'=>$applicant_id, 'program_name'=>$prefs[1], 'preference_order'=>2),
        );
      Program::insert($data); //insert program perferences


      $punjab_test = $request->get('punjab_test');
      $test_details = new TestDetails();
      $test_details->applicant_id = Auth::user()->id;
      $test_details->test_name = $punjab_test;
      $test_details->test_roll_number = $request->get('test_roll_number');
      //$test_details->test_total_marks = $request->get('test_total_marks');
      $test_details->test_total_marks=100;
      $test_details->test_obtained_marks = $request->get('test_obtained_marks');

      $test_details->save();
      $success = 'Program preference added';
      return redirect('apply/submit')->with('success', $success);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
