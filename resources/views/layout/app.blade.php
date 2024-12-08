<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
</head>


<body class="flex flex-col min-h-screen">
    @include('includes.nav')
    <div class="container mx-auto px-4">
        
        @yield('content')
    </div>
   
    @include('includes.footer')
</body>
</html>






{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
 --}}
