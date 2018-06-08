<?php

namespace App\Http\Controllers;

use App\ContactDetails;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Auth;


class ContactDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return redirect('/apply/contact');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicant.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactDetails  $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function show(ContactDetails $contactDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactDetails  $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactDetails $contactDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactDetails  $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactDetails $contactDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactDetails  $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactDetails $contactDetails)
    {
        //
    }
}
