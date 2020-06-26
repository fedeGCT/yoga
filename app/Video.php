<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'name', 'slug', 'description','image1', 'image2', 'url',
    ];
    public function routines(){
        return $this->belongsToMany(Routine::class);
    }
}
