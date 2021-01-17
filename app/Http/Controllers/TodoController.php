<?php
namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['todos'] = Todo::All();
        return view('todo.index',$data);
    }

    public function create()
    {
        return view('todo.create');
    }
    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        return redirect('todo');
    }

    public function show(Todo $todo)
    {
        $data['todo'] = $todo;
        return view('todo.show',$data);
    }

    public function edit(Todo $todo)
    {
        $data['todo'] = $todo;
        return view('todo.edit',$data);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        return redirect('todo');   
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('todo');   
    }
}
