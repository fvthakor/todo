<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    <div class="container mt-3">
        <div class="card">
           <div class="card-body">
                <form method="post" action="{{ route('todo.create') }}">
                    @csrf  
                    <div class="form-group col-md-6"> 
                        <label class="col-form-label">Title</label> 
                        <input class="form-control" type="text" name="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6"> 
                        <label class="col-form-label">Description</label> 
                        <textarea class="form-control" type="text" name="description"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mt-2"> 
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>
           </div> 
        </div>
    </div>
</x-app-layout>