<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


   use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles);
        }
        return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
    }

    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    
    public function profile() { return $this->hasOne('App\Profile'); }
    public function educations() { return $this->hasMany('App\Education'); }
    //public function alevels() { return $this->hasMany('App\Alevel'); }
    //public function olevels() { return $this->hasMany('App\Olevel'); }

}
