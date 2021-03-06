<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    protected $table = 'projects';

    protected $fillable = ['title', 'description'];

    public function images(){
    	return $this->hasMany(\App\Image::class);
    }
}
