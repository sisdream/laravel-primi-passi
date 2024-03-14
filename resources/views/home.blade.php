
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>@forelse($greetings as $greeting)
        {{ $greeting}} @unless($loop->last) , @endunless
        @empty
        @endforelse 
    </p>
</body>
</html>