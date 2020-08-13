
<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

      @livewireStyles

  <title>Todos</title>

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">




</head>

<body>

    <div class="text-center flex justify-center pt-20">
 
       <div class="w-1/3 border border-gray-500 rounded py-4">

          @yield('contents')

       </div>
      
    
    </div>


       @livewireScripts
</body>

</html>

