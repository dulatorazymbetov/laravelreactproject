<?php

namespace App\Models\User;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    protected $guarded = [];

    protected $hidden = [
        'password', 'created_at', 'updated_at', 'pivot'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getModulesAttribute($value){
        return $this->roles->pluck('modules')->flatten()->unique('id')->sortBy('url')->values();
    }
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function student(){
        return $this->belongsTo('App\Models\Student\Student');
    }
    public function staff(){
        return $this->hasOne('App\Models\Staff\Staff');
    }
    public function applicant(){
        return $this->belongsTo('App\Models\Applicant\Applicant');
    }
    public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims(){
        return [];
    }
    public function nationality(){
        return $this->belongsTo('App\Models\User\Nationality');
    }
    
}
