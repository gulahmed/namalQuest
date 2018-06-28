<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'applicant_program_details';
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
