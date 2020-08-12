
@extends('todos.layout')


@section('contents')

    <div class="flex justify-between border-b pb-4 px-4">

    <h1 class="text-2xl">{{$todo -> title}} </h1>

   <a href="{{route('todos.index')}}" class="mx-5  py-2  text-pink-400 cursor-pointer">

        <span class="fa fa-arrow-left"/>
    
    </a>

    </div>

    @include('layouts.flash')


    <div>

        <div>

        <p>{{$todo -> description}}</p>

        </div>

  
@endsection