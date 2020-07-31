
@extends('todos.layout')



@section('contents')

    <h1 class="text-2xl border-b pb-4">Update Todo</h1>

    {{-- <x-flasher/>  --}}

    @include('layouts.flash')

<form class="py-5" method="post" action="{{Route('todos.update',$todo->id)}}"   class="py-5">
           @csrf


           @method('patch')

          <input type="text" name="title" value="{{$todo->title}}" class="py-4 px-4 border rounder" />

          <input type="submit" value="Update" class="p-4 border rounder"/>

    </form>

    <a href="/todos" class="mx-5 my-5 py-2 px-2 bg-white-400 cursor-pointer text-black rounded border">Back </a>
    

@endsection

