<?php

namespace App\Models\EduProgram;

use Illuminate\Database\Eloquent\Model;

class EduProgramSubject extends Model {
    protected $guarded = [];

    public function subject(){
		return $this->belongsTo('App\Models\EduProgram\Subject');
	}
}
