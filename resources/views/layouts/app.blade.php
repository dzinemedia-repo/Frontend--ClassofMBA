<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <title>Class of My MBA</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    </head>
    <body class="antialiased">
      <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            @yield('content')
            {{-- @include('layouts.footer') --}}
        </main>
    </div>
          {{-- js --}}
          <script src="../path/to/flowbite/dist/flowbite.js"></script>
          <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

    </body>
</html>
