<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodolistController extends Controller
{
    public function index(){
        $todos = Todo::All();
        return view('todo_list', ["todos" => $todos]);
    }

    public function createPage(){
        return view('todo-create');
    }

    public function create(Request $request){
        $todo = new Todo();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->time = $request->time;

        $todo->save();

        return redirect('/');

    }

    public function editPage($id){
        $todo = Todo::find($id);
        return view('edit-page', ["todo" => $todo]);
    }

    public function edit(Request $request){
        $todo = Todo::find($request->id);

        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->time = $request->time;

        $todo->save();

        return redirect("/");
    }

    public function deletePage($id){
        $todo = Todo::find($id);
        return view('delete-page', ["todo"=>$todo]);
    }

    public function delete(Request $request){
        Todo::find($request->id)->delete();

        return redirect('/');
    }
}
