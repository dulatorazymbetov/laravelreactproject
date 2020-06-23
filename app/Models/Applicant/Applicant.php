<?php

namespace App\Models\Applicant;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {
    protected $guarded = [];
    
    protected $hidden = [
        'deleted_at', 'created_at', 'updated_at', 'pivot'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User\User');
    }
    public function social_status(){
    	return $this->belongsToMany(SocialStatus::class);
    }
}
