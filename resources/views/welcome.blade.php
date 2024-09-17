<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- style --}}
        <link rel="stylesheet" href="css/welcome.css">
        
    </head>
    <body class="antialiased">
               <nav class="navbar">
            <button><a href="/">Home</a></button>
            <button><a href="/add-contact">Add Contact</a></button>
            <button><a href="/get-all-contact">see Contacts</a></button>
        </nav>
    </body>
</html>
