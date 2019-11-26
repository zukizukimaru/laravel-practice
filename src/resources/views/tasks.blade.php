@extends('layouts.app')

@section('content')
<div class="panel-body">
   @include('common.errors')

 <form action="{{url('task')}}" method="post" class="form-horisontal">
    @csrf
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">タスク</label>
        <div class="col-sm-6">
            <input type="text" name="task" id="task-name" class="form-control">
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>タスク
                </button>
            </div>
        </div>
    </div>
 </form>
</div>

@if (count($tasks)>0)
<div class="panel panel-default">
    <div class="panel-heading">現在のタスク</div>
    <div class="panel-body">
        <table class="table table-striped task-talbe">
            <thead>
                <th>Task</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td class="table-text">
                        <div>{{$task->name}}</div>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endif
@endsection
