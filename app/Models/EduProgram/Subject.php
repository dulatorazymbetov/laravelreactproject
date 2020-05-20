<?php

namespace App\Models\EduProgram;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model {
    use SoftDeletes;
    protected $guarded = [];

    public function edu_program_subjects(){
    	return $this->hasMany('App\Models\EduProgram\EduProgramSubject');
    }
    public function department(){
    	return $this->belongsTo('App\Models\Department\Department');
    }
}
