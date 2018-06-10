<?php

namespace App;
use Carbon\Carbon;


use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'applicant_profile';

    protected $fillable = ['applicant_id', 'father_name', 'date_of_birth'];

    public function getbirthDate()
    {
    if (!empty($this->date_of_birth)){
      $dob= Carbon::createFromFormat('Y-m-d', $this->date_of_birth);
      return Carbon::parse($dob)->format('d/m/Y');
    }
    else {
      return "";
    }
    }

}
