<?php

namespace App\Http\Controllers;
use App\Mail\FinishTask;

class TaskController extends Controller
{
    public function result($id) {
        $task = \DB::table('tasks')->whereId($id)->select()->first();
        if ($task == null)
            return abort(404);
        $task_details = \DB::table('task_details')->whereIn('id', explode(',', $task->protein_id))->get();
        return view('result', [
            'task' => $task,
            'task_details' => $task_details,
        ]);
    }

    public function finish($id){
        $task = \DB::table('tasks')->where('id',$id)->first();
        \Mail::to($task->email)->send(new App\Mail\FinishTask($task));
        return 'ok';
    }
}

