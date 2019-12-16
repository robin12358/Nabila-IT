<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coursesubject extends Model
{
   protected $table = 'coursesubjects';
   protected $fillable =[
   	'subject_name',
   	'status'
   ];
}
