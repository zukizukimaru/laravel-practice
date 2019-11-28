<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksControlle extends Controller
{




public function edit($id)
{
    $data = Task::findOrFail($id);

    return view('edit',['message' => '編集フォーム','data' => $data]);
}

public function update(Request $request,$id)
{
    $task = Task::findOrFail($id);
    $task->name = $request->input('name');
    $task->save();

    return redirect('/')->with('status','UPDATE完了！');
}

}

