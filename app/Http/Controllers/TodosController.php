<?php

namespace App\Http\Controllers;


use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();

        return view('todos')->with('todos',$todos);
    }


    public function Store(Request $request)
    {
        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }


    public function Delete($id){
   $todo = Todo::find($id);
    $todo->delete();
    return redirect()->back();
    }

    public function update($id){


        $todo = Todo::find($id);
        return view('update')->with('todo', $todo);
    }

    public function save(Request $request,$id){
       $todo = Todo::find($id);
       $todo->todo = $request->todo;
       $todo->save();
       return redirect()->route('todos');
    }

    public function completed($id){
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        return redirect()->back();

    }
}
