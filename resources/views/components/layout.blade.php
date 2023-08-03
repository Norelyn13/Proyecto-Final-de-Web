<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>{{ $title ?? 'Libreria' }}</title>
</head>
<body>
<header class="border-b py-4 flex flex-row justify-around">
    <h1 class="text-xl uppercase font-bold text-primary">
        <a href="/">
            Libreria
        </a>
    </h1>

    <nav>
        <ul class="flex flex-row space-x-8">
            <li>
                <a href="/libros" class="link hover:link-secondary">Libros</a>
            </li>
            <li>
                <a href="/autores" class="link hover:link-secondary">Autores</a>
            </li>
            <li>
                <a href="/contacto" class="link hover:link-secondary">Contacto</a>
            </li>
        </ul>
    </nav>

</header>

<main class="flex flex-col container mx-auto mt-4 mb-8">
    {{ $slot }}
</main>

</body>
</html>
