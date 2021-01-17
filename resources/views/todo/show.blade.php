<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>
    <div class="container mt-3">
        <div class="card">
           <div class="card-body">
                Todo View
                <a class="float-right" href="{{ route('todo') }}"><button class="btn btn-danger">back</button></a>
                <hr>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="{{ $todo->title }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail2" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="" class="form-control-plaintext" id="staticEmail2" value="{{ $todo->description }}">
                  </div>
                </div>
           </div>
       </div>
    </div>
</x-app-layout>