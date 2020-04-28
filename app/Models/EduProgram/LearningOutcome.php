<?php

namespace App\Models\EduProgram;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LearningOutcome extends Model {
    use SoftDeletes;
    protected $guarded = [];
}
