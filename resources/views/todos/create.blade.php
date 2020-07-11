@extends('todos.layout')
@section('content')
        <div class="flex justify-between border-b pb-4 px-4">
            <h1 class="text-2xl pb-4">What next you need TO-DO</h1>
            <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer"><span class="fas fa-arrow-left"></span></a>
        </div>
        
        <x-alert />
        <form action="{{route('todo.store')}}" method="post" class="py-5 my-2">
            @csrf
            <input type="text" name = "title" class="py-2 px-2 rounded border" />
            <input type="submit" value = "create" class="p-2 bg-white rounded border"/>
        </form>
        @endsection
    