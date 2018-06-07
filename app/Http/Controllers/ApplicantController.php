<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){
    	$data = array(
    		'action'=>'profile',
    		'completed' =>'0',
    		'profile'=>[
    			'title'=>'Mr',
    			'first_name'=> 'Gul',
    			'gender'=>'Male',
    			'last_name'=> 'Ahmed',
    			'date_of_birth'=>'00/00/1922',
    			'nationality'=>'Pakistani',
    			'marital_status'=>'single',
    			'religion'=>'Islam',
    			'address_country'=>'Pak',
    			'id_number'=>'234234234',
    			'phone_number'=>'2423434',
    			'mobile_number'=>'21321321',
    			'address_1'=>'asfsad',
    			'address_city'=>'islo',
    			'address_district'=>'asdf',
    	   		],
    	   	'list'=>[
    	   		'nationality'=>[
    	   			'Pak','UK','GB'
    	   		],
    	   	]
    	);

		return view('applicant.profile', compact('data'));
    	
    }
}
