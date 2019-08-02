
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tutorial Larabel</title>

    </head>
    <body>
        
        <h1> {{ $titulo }}</h1>
    <ul>
        <hr> 
        
    @forelse ($usuarios as $usuario)
            <li>{{ $usuario }}</li>
       @empty
       <p>  No hay usuarios </p>
       @endforelse 
    </ul>
    </body>
</html>
