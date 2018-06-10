<?php

namespace App;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

class SectionStatus extends Model
{
    protected $table="admission_section_status";
    public $timestamps = false;
    protected $guarded = [];

    public static function is_profile_section(){
      $ss= DB::table('admission_section_status')
               ->where('applicant_id','=',Auth::user()->id)
               ->get(['profile_details_status'])->first();
      if (!empty($ss->profile_details_status))
        return $ss->profile_details_status;
      else
        return "pending";
    }


    public static function is_contact_section(){
      $ss= DB::table('admission_section_status')
               ->where('applicant_id','=',Auth::user()->id)
               ->get(['contacts_details_status'])->first();
      if (!empty($ss->contacts_details_status))
        return $ss->contacts_details_status;
      else
        return "pending";
    }

    public static function is_education_section(){
      $ss= DB::table('admission_section_status')
               ->where('applicant_id','=',Auth::user()->id)
               ->get(['academic_details_status'])->first();
      if (!empty($ss->academic_details_status))
        return $ss->academic_details_status;
      else
        return "pending";
    }

    public static function is_program_section(){
      $ss= DB::table('admission_section_status')
               ->where('applicant_id','=',Auth::user()->id)
               ->get(['program_details_status'])->first();
      if (!empty($ss->program_details_status))
        return $ss->program_details_status;
      else
        return "pending";
    }




}
