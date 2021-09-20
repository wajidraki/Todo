@extends('layout')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/create/todo" method="post">
                    {{@csrf_field()}}
                    <label>
                        <input type="text" class="form-control" name="todo" placeholder="create a new todo" style="height: 50px;width: 300px;font-size: x-large;margin-top: 100px;">
                    </label>
                </form>
            </div>
        </div>
    </div>
</div>


    <hr>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="table_1">
                        <table>
                            @foreach($todos as $todo )
                                <tr>
                                    <td>
                                        {{$todo->todo}}<a href="{{route('todo.Delete',['id'=>$todo->id])}}" class="btn btn-danger"> x </a>
                                        <a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-info btn-xs"> Update </a>

                                        @if(!$todo->completed)
                                            <a  href="{{route('todos.completed', ['id' =>$todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
                                        @else
                                            <span class="text-success">Completed!</span>
                                           @endif
                                        <hr>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop
