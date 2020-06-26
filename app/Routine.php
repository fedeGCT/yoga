<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $fillable = [
        'program_id', 'name', 'slug','description', 'image', 'time',
    ];
    public function program(){
        return $this->belongsTo(Program::class);
    }
    public function videos(){
        return $this->belongsToMany(Video::class);
    }
}
