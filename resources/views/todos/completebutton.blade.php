

   @if($todo->completed)

   <span class="fa fa-check text-green-400 px-2  cursor-pointer" onclick="event.preventDefault; document.getElementById('formid-incomplete-{{$todo->id}}').submit()" class="fa fa-check text-gray-400  cursor-pointer px-2" />

<form style="display: none" id="{{'formid-incomplete-'.$todo->id}}" method="post" action="{{route('todos.incomplete',$todo->id)}}">
           @csrf
           @method('delete')
    </form>

    
   @else

   <span onclick="event.preventDefault; document.getElementById('formid-{{$todo->id}}').submit()" class="fa fa-check text-gray-400  cursor-pointer px-2" />

<form style="display: none" id="{{'formid-'.$todo->id}}" method="post" action="{{route('todos.complete',$todo->id)}}">
           @csrf
           @method('put')
    </form>

   @endif