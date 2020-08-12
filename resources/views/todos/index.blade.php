
@extends('todos.layout')

@section('contents')

    <div class="flex justify-between border-b pb-4 px-4">

    <h1 class="text-2xl">Todos Lists</h1>

    <a href="{{route('todos.create')}}" class="mx-5  py-2  text-pink-400 cursor-pointer">

        <span class="fa fa-plus-circle"/>
    
    </a>

    </div>

    {{-- <x-flasher/>  --}}

    @include('layouts.flash')


<ul class="my-8">

{{-- @if($todos->count() > 0) --}}
    
{{-- @foreach ($todos as $todo ) --}}

@forelse ($todos as $todo )

<li class="flex justify-between px-2 py-2">

    
  <div>

  @include('todos.completebutton')

  </div>

   @if($todo->completed)  

   <p class="line-through">{{$todo -> title}}  </p>

   @else

<a class="cursor-pointer" href="{{route('todos.show',$todo -> id)}}">{{$todo -> title}}  </a>


 @endif


 <div>


   <a href="{{route('todos.edit', $todo->id)}}"  class="text-yellow-400 cursor-pointer text-white">


   <span class="fa fa-edit text-orange-400 px-2" />

   </a>

   

   <span  class="fa fa-trash text-red-400 px-2"  onclick="event.preventDefault;  
    
     if(confirm('Do you really want to delete?')){

     document.getElementById('formtrashid-{{$todo->id}}').submit()}"     
  />


   <form style="display: none" id="{{'formtrashid-'.$todo->id}}" method="post" action="{{route('todos.destroy',$todo->id)}}">
           @csrf
           @method('delete')
    </form>


</div>
</li>

{{-- @endforeach
   --}}


{{-- @else --}}

@empty
    
<p>No task available. Create one</p>

{{-- @endif --}}

@endforelse

</ul>

    <a href="/" class="mx-5 my-5 py-2 px-2 bg-white-400 cursor-pointer text-black rounded border">Back </a>
    
@endsection

