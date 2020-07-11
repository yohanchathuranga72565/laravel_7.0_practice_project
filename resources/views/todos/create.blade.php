@extends('todos.layout')
@section('content')
        <div class="flex justify-between border-b pb-4 px-4">
            <h1 class="text-2xl pb-4">What next you need TO-DO</h1>
            <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer"><span class="fas fa-arrow-left"></span></a>
        </div>
        
        <x-alert />
        <form action="{{route('todo.store')}}" method="post" class="py-5 my-2">
            @csrf
            <div class="py-1">
                <input type="text" name = "title" class="p-2 rounded border" placeholder="Title"/>
            </div>
            <div class="py-1">
                <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
            </div>
            <div class="py-2">
                <div class="flex justify-center pb-4 px-4">
                    <h2 class="text-lg pb-4">Add Steps for tsks</h2>
                    <span class="fas fa-plus px-2 py-2 cursor-pointer"></span>
                </div>
                
                <input type="text" name="step" class="p-2 rounded border" placeholder="Describe step"/>
            </div>
            <div class="py-1">
                <input type="submit" value = "create" class="p-2 bg-white rounded border"/>
            </div>
            
        </form>
        @livewire('counter')
        @endsection
    