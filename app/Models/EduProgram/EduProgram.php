<?php

namespace App\Models\EduProgram;

use Illuminate\Database\Eloquent\Model;

class EduProgram extends Model {
	protected $guarded = [];

	public function learning_outcomes(){
		return $this->hasOne('App\Models\EduProgram\LearningOutcome');
	}
}
