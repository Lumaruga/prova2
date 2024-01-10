<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sito prova</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>

    <header>
        <h1>Sito prova</h1>
        <nav>
            <ul>
                <li><a href="{{ route('persone.index') }}">Elenco Persone</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>