<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    protected $hidden = [
        'created_at', 'updated_at', 'pivot'
    ];

    protected $with = ['modules'];

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
    public function modules()
    {
    	return $this->belongsToMany(Module::class);
    }
}