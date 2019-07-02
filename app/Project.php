<?php

namespace App;

use App\Mail\ProjectCreated;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded= [];

   



    // public static function boot()
    // {
    //     parent::boot();

    //     static::created(function($project){
        
    //         // \Mail::to($project->owner->email)->send(
    //         //     new ProjectCreated($project)
    //         // );
    //     }); 

    // }


    public function owner(){
       return $this->belongsTo(User::class); 
    }

    public function tasks(){
       return $this->hasMany(Task::class);
    }

    public function addTask ($description){

        $this->tasks()->create(compact('description'));

      
    }
}
