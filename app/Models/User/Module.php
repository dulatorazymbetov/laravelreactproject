<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $hidden = [
        'created_at', 'updated_at', 'pivot'
    ];
    public function roles(){
    	return $this->belongsToMany(Role::class);
    }
}
