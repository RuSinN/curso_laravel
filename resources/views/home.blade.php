<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera vista</title>
</head>
<body>
    <h1>Hola mundo {{$nombre}} {{$apellido}}</h1>
    <ul>
        @foreach ($posts as $item)
            <?php //dd($loop)?>
            
            @if ($loop->first)
                <li>Primero: {{$item}}</li>
            @elseif($loop->last)
                <li>Ultimo: {{$item}}</li>
            @else
                <li>{{$item}}</li>
            @endif
        @endforeach

        @forelse ($posts2 as $item)
            <li>{{$item}}</li>
        @empty
            <li>Vacío</li>
        @endforelse

    </ul>
</body>
</html>