<div>
    {{-- Do your work, then step back. --}}

      <div class="flex justify-center  pb-4 px-4">

    <h1 class="text-lg pb-4">Add steps for tasks</h1>

     <span wire:click="increment"  class="fa fa-plus-circle  px-2 py-2 cursor-pointer"/>

    </div>


    {{-- @for ($i = 0; $i <count($steps); $i++) --}}

    @foreach ($steps as $step)
        
    <div class="flex justify-center py-2" wire:key={{$step}}>
    
    <input type="text" name="step[]" class="py-4 px-4 border rounder"  placeholder="{{'Describe Step '.($step+1)}}"/>

    <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$step}})" />
     
    </div>

    {{-- @endfor --}}

    @endforeach

</div>
