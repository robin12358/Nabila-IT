<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{	 protected $table = 'teams';
protected $primaryKey="team_id";
     protected $fillable = [
        'name', 'email', 'phone','designation','address','expertise','details','image',
    ];
}
