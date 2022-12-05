 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('titulo')</title>
     <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
 </head>
 <body>
     @yield('conteudo')
     <script src="{{url("assets/js/javascript.js")}}"></script>
 </body>
 </html> 