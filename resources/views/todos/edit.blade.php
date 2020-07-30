
@extends('todos.layout')




@section('contents')
    <div class="flex justify-center">

    <h1 class="text-2xl">Todo List</h1>

    <a href="/todos/create" class="mx-5 py-2 px-2 bg-blue-400 cursor-pointer text-white rounded">Edit Todo</a>

    </div>

    {{-- <x-flasher/>  --}}

    @include('layouts.flash')


<ul class="my-8">

{{$todo->title}}

@endsection

