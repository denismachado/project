<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class CompleteTaskController extends Controller
{
    public function store(Task $task){

        $task->completed();
        return back();
    }

    public function destroy(Task $task){
        $task->incompleted();
        return back();
    }
}
