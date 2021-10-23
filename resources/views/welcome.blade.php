<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @include('style.style')

    <style>
    
</style>
</head>
<body class="antialiased">



    <nav >
      <div class="container">

        @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}" >Administracción</a>
        @else
        <a href="{{ route('login') }}" >Administracción</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
        @endif
    </div>
</nav>



<h1 style="margin: 10px 0px 0px 100px;">Encuestas</h1>
<div class="col-3" style="margin: 50px 0px 0px 100px;">
    <ul class="list-group">
      <a href="/form/1"><li class="list-group-item">Formulario # 1</li></a>
      <a href="/form/2"><li class="list-group-item">Formulario # 2</li></a>
      <a href="/form/3"><li class="list-group-item">Formulario # 3</li></a>
      <a href="/form/4"><li class="list-group-item">Formulario # 4</li></a>
      <a href="/form/5"><li class="list-group-item">Formulario # 5</li></a>
  </ul>
</div>

</body>
</html>
