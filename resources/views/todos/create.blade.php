
@extends('todos.layout')




@section('contents')
    <div class="text-center  pt-20">
    <h1 class="text-2xl">Create A Todos</h1>


    {{-- <x-flasher/>  --}}

    @include('layouts.flash')

    <form class="py-5" method="post" action="/todos/create">
           @csrf

          <input type="text" name="title" class="py-4 px-4 border rounder" />

          <input type="submit" value="Create" class="p-4 border rounder"/>

    </form>
    
@endsection