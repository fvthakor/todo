<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-3">
        <div class="card">
           <div class="card-body">
            <x-jet-welcome />
           </div> 
        </div>
    </div>
</x-app-layout>
