<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    	protected $table = 'pages';
		protected $primaryKey="page_id";
     protected $fillable = [
        'title', 'description',
    ];
   
}
