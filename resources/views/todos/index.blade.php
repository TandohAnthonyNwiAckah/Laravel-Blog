
@extends('todos.layout')

@section('contents')
    <div class="flex justify-center">

    <h1 class="text-2xl">Todos Lists</h1>

    <a href="/todos/create" class="mx-5 py-2 px-2 bg-blue-400 cursor-pointer text-white rounded">Create New</a>

    </div>

    {{-- <x-flasher/>  --}}

    @include('layouts.flash')


<ul class="my-8">

@foreach ($todos as $todo )

<li class="flex justify-center py-2">

<p>{{$todo -> title}}  </p>

<a href="{{'/todos/'.$todo->id.'/edit'}}"  class="mx-5 py-2 px-2 bg-yellow-400 cursor-pointer text-white rounded">Edit</a>

</li>
    
@endforeach
</ul>
    
@endsection

