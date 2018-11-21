<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;

class ProjectTasksController extends Controller
{
    public function update($id){

//        dd(request()->all());

        $task = Task::findOrFail($id);

        $task->completed = request()->has('completed');

        $task->update();

        return back();

//        $task->update([
//            'completed' => request()->has('completed')
//        ]);
//
//        return back();
    }
}
