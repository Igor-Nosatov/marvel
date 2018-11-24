<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';

    protected $fillable = ['name','hero_id'];

    public function hero()
    {
    	return $this->belongsTo('App\Hero','hero_id');
    }
}
