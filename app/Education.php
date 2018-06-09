<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'applicant_academic_details';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
