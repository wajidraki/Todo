@extends('layout')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">
                    {{@csrf_field()}}
                    <label>
                        <input type="text" class="form-control" name="todo" value="{{$todo->todo}}" placeholder="create a new todo" style="height: 50px;width: 500px;font-size: x-large;margin-top: 100px;">
                    </label>
                </form>
            </div>
        </div>
    </div>
</div>
<hr>

@stop
