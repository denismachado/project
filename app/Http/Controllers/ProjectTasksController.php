<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;
use \App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project){

        $attributes = request()->validate(['description' => 'required']);

        $project->addTask($attributes);

        return back();

    }

    public function update($id){


        $task = Task::findOrFail($id);

//        $task->complete(request()->has('completed'));
//
        $task->completed = request()->has('completed');
//
        $task->update();

        return back();

//        not working   //
//
//        $task->update([
//            'completed' => request()->has('completed')
//        ]);
//
//        return back();
    }
}
