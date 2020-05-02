<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $with = ['study_form', 'study_status'];
    
    public function user(){
        return $this->belongsTo('App\Models\User\User');
    }
    public function study_status(){
        return $this->belongsTo('App\Models\Student\StudyStatus');
    }
	public function study_form(){
        return $this->belongsTo('App\Models\Student\StudyForm');
    }
}
