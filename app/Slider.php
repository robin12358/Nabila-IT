<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    	protected $table = 'sliders';
		protected $primaryKey="slider_id";
     protected $fillable = [
        'title', 'subtitle', 'image','status','position',
    ];
}
