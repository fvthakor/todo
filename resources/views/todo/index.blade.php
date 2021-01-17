
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>
    <div class="container mt-3">
        <div class="card">
           <div class="card-body">
                Todo list view 
                <a class="float-right" href="{{ route('todo.create') }}"><button class="btn btn-danger">Add Todo</button></a>

                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($todos as $todo)
                        <tr>
                            <td>{{ $todo->title }}</td>
                            <td>{{ $todo->description }}</td>
                            <td>
                                <a href="{{ route('todo.show', $todo->id ) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('todo.edit', $todo->id ) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('todo.delete', $todo->id ) }}" class="btn btn-danger btn-sm">
                                   <i class="fa fa-trash"></i> 
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
           </div>
       </div>
    </div>
</x-app-layout>