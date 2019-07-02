<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store (Project $project){
        // Task::create([
        //     'project_id'=> $project->id,
        //     'description'=> request('description')
        // ]);

        request()->validate(['description' => ['required','min:10']]);

        $project->addTask(request('description'));

        return back();

    }


    public function update (Task $task)
    {
        // $task->complete(request()->has('completed'));

    //    $task->update([
    //        'completed'=> request()->has('completed')
    //    ]);
  
        $method = request()->has('completed') ? "complete": "incomplete";

        $task->$method();
        
        return back();
    }

}
