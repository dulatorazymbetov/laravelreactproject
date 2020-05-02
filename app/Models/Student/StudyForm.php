<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class StudyForm extends Model
{
	protected $hidden = [
        'created_at', 'updated_at', 'pivot'
    ];
}
