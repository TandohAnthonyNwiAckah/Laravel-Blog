
<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Create Todos</title>

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>


<body>

    <div class="text-center  pt-20">
    <h1 class="text-2xl">Create A Todos</h1>


    {{-- <x-flasher/>  --}}

    @include('layouts.flash')

    <form class="py-5" method="post" action="/todos/create">
           @csrf

          <input type="text" name="title" class="py-4 px-4 border rounder" />

          <input type="submit" value="Create" class="p-4 border rounder"/>

    </form>

    </div>
</body>


</html>