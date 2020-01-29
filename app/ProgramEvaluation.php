<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramEvaluation extends Model
{
	protected $table = 'program_evaluation';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'university', 'course_name', 'course_number', 'program_degree_pursuing', 'program_course_description', 'verified_pro_member', 'city_state_country', 'program_course_long_description', 'hows_instructors', 'comments', 'followed_up_for_employment'
    ];
}
