
@extends('todos.layout')



@section('contents')

    <div class="flex justify-between border-b pb-4 px-4">

    <h1 class="text-2xl">Update Todo</h1>

    {{-- <h1 class="text-2xl">Create A Todos</h1> --}}


   <a href="{{route('todos.index')}}" class="mx-5  py-2  text-pink-400 cursor-pointer">

        <span class="fa fa-arrow-left"/>
    
    </a>

    </div>


    {{-- <x-flasher/>  --}}

    @include('layouts.flash')


 <form method="post" action="{{route('todos.update', $todo->id)}}" class="py-5">   
           @csrf
           @method('patch')


           <div class="py-1">

          <input type="text" name="title" class="py-4 px-4 border rounder"  value="{{$todo->title}}" placeholder= "Title" />
           </div>

           <div class="py-1">

          <textarea name="description" class="p-4 rounded border"  placeholder="Description">{{$todo->description}}</textarea>
     
           </div>





            <div class="py-2">


         {{-- @livewire('edit-step') --}}

             @livewire('edit-step',['steps' => $todo->steps])


         {{-- <h1 class="text-lg"> Add Steps if required</h1>  --}}

        
        
           </div>








           <div class="py-1">

          <input type="submit" value="Update" class="p-4 border rounder"/>

           </div>


    
    </form>

    {{-- <a href="{{route('todos.index')}}" class="mx-5 my-5 py-2 px-2 bg-white-400 cursor-pointer text-black rounded border">Back </a> --}}
    

@endsection

