<?php

namespace App\Models\EduProgram;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EduProgramSubject extends Model {
    use SoftDeletes;
    protected $guarded = [];

    public function subject(){
		return $this->belongsTo('App\Models\EduProgram\Subject');
	}
}
