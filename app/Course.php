<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
        	protected $table = 'courses';
		protected $primaryKey="course_id";
     protected $fillable = [
        'title', 'details', 'subject_name','course_type','course_duration_munth','course_duration_hour',
        'trainer_name','trainer_image','course_fee','course_image',];
}
