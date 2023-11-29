<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>

<body>
    <div class="wrapper">
        @include('layout.component.sidebar')
        <div class="main">
            @include('layout.component.navbar')
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
