<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- @vite('resources/css/app.css') --}}
    <title>{{ $title }}</title>
</head>
<body>
    <header></header>

    {{ $slot }}

    <footer></footer>
</body>
</html>