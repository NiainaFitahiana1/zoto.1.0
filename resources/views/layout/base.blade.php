<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport</title> 
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href={{asset("assets/fontawesome-free-6.4.2-web/css/all.min.css")}}>
    @yield('style')
</head>
<body class="w-full h-full">
  <div class="w-full h-full bg-gray-950/40">
  @yield('base')
  @include('sweetalert::alert')
  </div>
        <script src={{asset("assets/fontawesome-free-6.4.2-web/js/all.min.js")}}></script>
</body>
</html>
