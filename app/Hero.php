<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';

    protected $fillable = ['nick','real_name​', 
    'origin_description​','superpowers',
    'catch_phrase'];

    public function image()
    {
    	return $this->hasOne('App\Image');
    }
}
