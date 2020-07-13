<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class DiplomAppSubject extends Model
{
    public function type(){
        return $this->belongsTo('App\Models\Student\DiplomAppSubjectType', 'discipline_type_id');
    }
}
