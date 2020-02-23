<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $with = ['study_status'];
    
    public function study_status(){
        return $this->belongsTo('App\Models\Student\StudyStatus');
    }
}
