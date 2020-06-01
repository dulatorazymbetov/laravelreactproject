<?php

namespace App\Models\Applicant;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Applicant extends Authenticatable implements JWTSubject
{
	use Notifiable;

	protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at', 'deleted_at', 'pivot'
    ];

	public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims(){
        return [];
    }
}
