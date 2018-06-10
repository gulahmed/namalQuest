<?php

namespace App\Http\Controllers;

use App\ContactDetails;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Auth;
use App\SectionStatus;

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
      $current_user = Auth::user()->id;
      $applicant = ContactDetails::where('applicant_id', $current_user)->count();
      if ($applicant == 0) {
        $applicant =new ContactDetails();
        return view('applicant.contact',compact('applicant'));
      } else {
        $applicant = ContactDetails::where('applicant_id', $current_user)->first();
        return view('applicant.contact',compact('applicant'));
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
          'applicant_mobile' => 'required|Numeric',
          'parent_mobile' => 'required|Numeric',
          'postal_address' => 'required',
          'permenant_address' => 'required',
          'district' =>'required',
          'domicile_province'=>'required',
          'country'          =>'required'
      ]);

      $contacts = ContactDetails::firstOrNew([
                            'applicant_id' => Auth::user()->id]);
     $contacts->applicant_mobile = $request->get('applicant_mobile');
     $contacts->parent_mobile = $request->get('parent_mobile');
     $contacts->postal_address= $request->get('postal_address');
     $contacts->permenant_address= $request->get('permenant_address');
     $contacts->district= $request->get('district');
     $contacts->domicile_province= $request->get('domicile_province');
     $contacts->country= $request->get('country');
     $contacts->save();

     $formsection= SectionStatus::updateOrCreate([
       'applicant_id' => Auth::user()->id],[
       'contacts_details_status'=>'completed']
     );

      $success = "Contact Details Saved Succefully";
      return redirect('/apply/education')->with('success',$success);

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
