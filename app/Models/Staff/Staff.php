<?php

namespace App\Models\Staff;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{   
    protected $hidden = [
        'deleted_at', 'created_at', 'updated_at', 'pivot'
    ];
    
    public function academic_degree(){
        return $this->belongsTo(AcademicDegree::class);
    }
    public function academic_rank(){
        return $this->belongsTo(AcademicRank::class);
    }
    public function english_level(){
        return $this->belongsTo(EnglishLevel::class);
    }
    public function user(){
        return $this->belongsTo('App\Models\User\User');
    }
}
