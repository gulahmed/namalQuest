<?php

namespace App\Http\Controllers;

use Session;
use App\Profile;
use Carbon\Carbon;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/apply/profile');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicant.profile');

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
            'title' => 'required',
            'father_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'applicant_nic' =>'required|size:13',
            'parent_nic'=>'required|size:13'
        ]);

        $profile = new Profile();
        //::firstOrNew(['user_id' => Auth::user()->id]);
        $profile->applicant_id = Auth::user()->id;
        $profile->title = $request->get('title');
        $profile->father_name = $request->get('father_name');
        $profile->gender = $request->get('gender');
        $dob = $request->get('date_of_birth');
        $profile->date_of_birth = Carbon::parse(substr($dob,6,4).'-'.substr($dob,3,2).'-'.substr($dob,0,2));
        $profile->applicant_nic = $request->get('applicant_nic');
        $profile->parent_nic = $request->get('parent_nic');
        $profile->save();

        $success = 'Personal Details Updated';
        return redirect('apply/details')->with('success', $success);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
