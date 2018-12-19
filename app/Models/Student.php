<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'users';

    public static function get_all_users()
    {
        return \App\Models\BackpackUser::role('student')->get();
    }

    public function enroll(\App\Models\Course $course)
    {
        $enrollment = new \App\Models\Enrollment;
        $enrollment->user_id = $this->id;
        $enrollment->responsible_id = 1;
        $enrollment->course_id = $course->id;
        $enrollment->status = 1;

        $enrollment->save();
    }
    
    public function getNameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}
