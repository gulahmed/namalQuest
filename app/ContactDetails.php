<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $table= 'applicant_contacts_details';

    protected $fillable = ['applicant_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
