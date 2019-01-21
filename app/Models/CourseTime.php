<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\CourseTime;
use Illuminate\Database\Eloquent\Model;

class CourseTime extends Model
{

    protected static function boot()
    {
        parent::boot();

        // when a coursetime is added, we should create corresponding events
        static::created(function($coursetime) {
            $coursetime->create_events();
        });

        // when a coursetime is deleted, we should delete all associated future events
        static::deleted(function($coursetime) {
            $coursetime->events()->delete();
            // todo delete only future events
        });
    }
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'course_times';
    // protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function create_events()
    {
        $today = Carbon::parse($this->course->start_date);
        $end = Carbon::parse($this->course->end_date);
        
        // for each day in the course period span
        while ($today <= $end) {

                // if today is a day of class, create the event
                if($this->day == $today->format('w'))
                {
                    Event::create([
                        'course_id' => $this->course->id,
                        'teacher_id' => $this->course->teacher_id,
                        'room_id' => $this->course->room_id,
                        'start' => $today->setTimeFromTimeString($this->start)->toDateTimeString(),
                        'end' => $today->setTimeFromTimeString($this->end)->toDateTimeString(),
                        'name' => $this->course->name,
                        'course_time_id' => $this->id,
                        'exempt_attendance' => $this->course->exempt_attendance
                    ]);
                }
            $today->addDay();
        }
    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /** events = class sessions.
     * An Event is related to the CourseTime that generated it. This is needed to update related events when updating the course schedule
     * 
     */
    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
