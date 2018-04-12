<!DOCTYPE html>
<html>
    <head>
        <title>{{config('app.name', 'Oefening Laravel')}}</title>
        <link rel=stylesheet href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
     
        </style> 
    </head>
    <body>
        @include('inc.navbar')
        <div class=container>
            @include('inc.messages')
            @yield('content')
        </div>
    </body>
</html>

 

