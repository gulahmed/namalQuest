<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Session;
use App\Profile;
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
      $education = Education::where('applicant_id', Auth::user()->id)->get();      
      return view('applicant.education',['count'=>$education->count(), 'education'=>$education]);
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
          'institute' => 'required',
          'qualification' => 'required',
          'result_awaiting' => 'required',
          'year_of_passing' => 'required',
          'roll_number'     =>'required',
          'board' => 'required',
          'total_marks' => 'required',
          'obtained_marks' => 'required|lte:total_marks',


        ]);
      $education = new Education([
			'applicant_id' => Auth::user()->id,
			'institute' => ucwords(strtolower($request->get('institute'))),
			'qualification' => ucwords(strtolower($request->get('qualification'))),
      'result_awaiting' => $request->get('result_awaiting'),
			'year_of_passing' => $request->get('year_of_passing'),
      'roll_number'     => $request->get('roll_number'),
      'board'           => $request->get('board'),
      'total_marks'     => $request->get('total_marks'),
      'obtained_marks'     => $request->get('obtained_marks'),
		]);

		$education->save();
    $count = Education::where('applicant_id', Auth::user()->id)->count();
		$success = 'Education Added – '.$education->institute;
		return redirect()->back()->with('success', $success)->with('count',$count);

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
