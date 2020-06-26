<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'level', 'duration', 'image',
    ];
    public function routines(){
        return $this->hasMany(Routine::class);
    }
}
