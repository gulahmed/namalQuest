<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Session;
use App\Profile;
use App\SectionStatus;
use Carbon\Carbon;
use Auth;

class EducationController extends Controller
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
      $education = Education::where('applicant_id', Auth::user()->id)->first();
      if ($education==NULL){
          $education =new Education();
          return view('applicant.education',[ 'education'=>$education]);
        } else {
          return view('applicant.education',[ 'education'=>$education]);
        }

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
          //'institute' => 'required',
          'qualification' => 'required',
          'result_awaiting' => 'required',
          'year_of_passing' => 'required',
          'roll_number'     =>'required',
          'board' => 'required',
          'total_marks' => 'required',
          'obtained_marks' => 'required|lte:total_marks',


        ]);
      $education = Education::firstOrNew([
			'applicant_id' => Auth::user()->id
    ]);
    $education->institute = " ";
		$education->qualification = ucwords(strtolower($request->get('qualification')));
    $education->result_awaiting = $request->get('result_awaiting');
		$education->year_of_passing = $request->get('year_of_passing');
    $education->roll_number     = $request->get('roll_number');
    $education->board           = $request->get('board');
    $education->total_marks     = $request->get('total_marks');
    $education->obtained_marks     = $request->get('obtained_marks');

		$education->save();
    //$count = Education::where('applicant_id', Auth::user()->id)->count();

    $formsection= SectionStatus::updateOrCreate([
      'applicant_id' => Auth::user()->id],[
      'academic_details_status'=>'completed']
    );



    $success = 'Educational Details Added Succesfully – '.$education->qualification;
    return redirect('apply/programs')->with('success', $success);
    //return redirect()->back()->with('success', $success)->with('count',$count);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $education = Education::find($id);
      if ($education->applicant_id === Auth::user()->id) {
        $education->delete();
        $message = 'Education Removed - '.$education->institute;
          return redirect()->back()->with('message', $message);
        }
        return redirect()->back();
    }
}
