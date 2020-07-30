
@extends('todos.layout')

@section('contents')
    <div class="text-center  pt-20">

    <h1 class="text-2xl">Todos Lists</h1>


    {{-- <x-flasher/>  --}}

    @include('layouts.flash')

  <ul>
   @foreach ($todos as $todo )

  <li>

  {{$todo -> title}}

  </li>
    
  @endforeach

  </ul>
    
@endsection

