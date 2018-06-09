<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestDetails extends Model
{
    protected $table = 'applicant_test_details';

    protected $guarded = [];

     public function user()
     {
         return $this->belongsTo('App\User');
     }
}
