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


    @include('layouts.nav')

<h1 style="margin: 10px 0px 0px 100px;">Bienvenido Encuestas mintic<a href="{{ url('/home') }}" > <img   data-toggle="tooltip" title="Ingresar administracción"  src="{{ asset('./images/admin.png')}}" alt="Buscar">

</a></h1>



<div class="col-3" style="margin: 50px 0px 0px 100px;">
    <ul class="list-group">
      <a href="/formViewUser"><li class="list-group-item">Formulario # 1</li></a>
      <a href="/formViewUser"><li class="list-group-item">Formulario # 2</li></a>
      <a href="/formViewUser"><li class="list-group-item">Formulario # 3</li></a>
      <a href="/formViewUser"><li class="list-group-item">Formulario # 4</li></a>
      <a href="/formViewUser"><li class="list-group-item">Formulario # 5</li></a>
  </ul>
</div>

</body>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip({ placement: "bottom"});   
});
</script>

</html>
