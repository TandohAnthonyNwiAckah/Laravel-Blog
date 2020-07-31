
@extends('todos.layout')

@section('contents')
    <div class="flex justify-center border-b pb-4">

    <h1 class="text-2xl">Todos Lists</h1>

    <a href="/todos/create" class="mx-5 py-2 px-2 bg-blue-400 cursor-pointer text-white rounded">Create New</a>

    </div>

    {{-- <x-flasher/>  --}}

    @include('layouts.flash')


<ul class="my-8">

@foreach ($todos as $todo )

<li class="flex justify-between px-2 py-2">

   @if($todo->completed)  

   <p class="line-through">{{$todo -> title}}  </p>

   @else

   <p>{{$todo -> title}}  </p>

 

 @endif

<div>


   <a href="{{'/todos/'.$todo->id.'/edit'}}"  class="mx-5 py-2 px-2 text-yellow-400 cursor-pointer text-white">


   <span class="fa fa-edit text-orange-400 px-2" />

   </a>



   @if($todo->completed)

   <span class="fa fa-check text-green-400 px-2" />
    
   @else

   <span class="fa fa-check text-gray-400  cursor-pointer px-2" />
 
   @endif


</div>

</li>
    
@endforeach

</ul>

    <a href="/" class="mx-5 my-5 py-2 px-2 bg-white-400 cursor-pointer text-black rounded border">Back </a>
    
@endsection

