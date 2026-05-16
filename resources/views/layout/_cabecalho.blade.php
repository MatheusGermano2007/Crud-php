<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<nav class="deep-orange">
    <div class="nav-wrapper container">
        <a href="#!" class="brand-logo">Projeto Cursos</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
        </ul>
    </div>
</nav>