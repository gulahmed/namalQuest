<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;
use Auth;
use App\TestDetails;
use App\SectionStatus;
use Session;
use Carbon\Carbon;
use App\ContactDetails;
use DB;

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

      $domicile = ContactDetails::where('applicant_id','=', Auth::user()->id)
                  ->select('domicile_province')
                  ->first();

       $programs = Program::where('applicant_id','=', Auth::user()->id)->get();   


      $first_preference ="";
      $second_preference="";
       foreach($programs as $p)
       for ($i=0; $i<2; $i++){
         if ($p->preference_order == 1){
           $first_preference = $p->program_name;
         }elseif ($p->preference_order == 2){
          $second_preference = $p->program_name;
         }
      }
      


      $test_roll_number ="";
      $test_obtained_marks= "";
      $test_name ="";
      $test_details = TestDetails:: where('applicant_id','=', Auth::user()->id)->first();   
      if($test_details!=NULL){
      $test_name = $test_details->test_name;
      $test_roll_number =$test_details->test_roll_number;
      $test_obtained_marks= $test_details->test_obtained_marks;
      }


      
    
      
    
        return view('applicant.programs',compact('domicile','first_preference','second_preference','test_roll_number', 'test_obtained_marks', 'test_name' ));
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
          //'test_roll_number' => 'required|Numeric',
          //'test_total_marks' => 'required',
          //'test_obtained_marks' => 'required|Numeric',

      ]);

      $applicant_id = Auth::User()->id;
      $prefs =$request->get('program_pref');

      $data = array(
          array('applicant_id'=>$applicant_id, 'program_name'=>$prefs[0], 'preference_order'=>1),
        //  array('applicant_id'=>$applicant_id, 'program_name'=>$prefs[1], 'preference_order'=>2), // bad design 
        );

 
        for($i =0; $i <count($data); $i++)
        {
          Program::updateOrCreate([
            'applicant_id' => $data[$i]['applicant_id'],

            'preference_order' => $data[$i]['preference_order']

          ],[
            'program_name' => $data[$i]['program_name']
          ]);

        }

      
      //  Program::insert($data); //insert program perferences


      if ( !empty( $request->get('test_name_punjab') ) )
      {
        $test_name= $request->get('test_name_punjab');
        $total_marks = $this->get_total_marks($test_name);


      }
      elseif (!empty($request->get('test_name_non_punjab')))
      {
        $test_name= $request->get('test_name_non_punjab');
        $total_marks = $this->get_total_marks($test_name);

      }



      $punjab_test = $request->get('test_name_non_punjab');
      $test_details = TestDetails::updateOrCreate([
        'applicant_id' => Auth::user()->id,
      ],[
        'test_name' => !empty($test_name)?$test_name:"Not Provided",
        'test_roll_number' => $request->get('test_roll_number'),
        'test_total_marks' => !empty($total_marks)?$total_marks: 0,
        'test_obtained_marks' => $request->get('test_obtained_marks')
      ]);
      
      // $test_details->test_name = !empty($test_name)?$test_name:"Not Provided" ;
      // $test_details->test_roll_number = $request->get('test_roll_number');
      // $test_details->test_total_marks = !empty($total_marks)?$total_marks: 0;
      // $test_details->test_obtained_marks = $request->get('test_obtained_marks');

      $test_details->save();

      $formsection= SectionStatus::updateOrCreate([
        'applicant_id' => Auth::user()->id],[
        'program_details_status'=>'completed']
      );

      $success = 'Program preference added';
      return redirect('apply/submit')->with('success', $success);



    }


    public function get_total_marks($test_name){
      $tests_with_marks = array(
        'NAT-I'=>100,
        'UET Lahore'=>400,
        'UET Peshawar'=>800,
        'NED Karachi' =>100,
        'Mehran Jamshoro'=>100,
        'Balochistan UET'=>120,
      );
      return $tests_with_marks[$test_name];


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
