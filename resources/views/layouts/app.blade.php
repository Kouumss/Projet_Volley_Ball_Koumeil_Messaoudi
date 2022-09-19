<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel_volleyball_plateforme</title>
    @vite(['resources/js/app.css', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>


    @include('layouts.includes.navbar')
    <div id="main contaienr m-5">
        @yield('content-back')
    </div>
    @include('layouts.includes.footer')
    
 
</body>

</html>
