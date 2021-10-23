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


<li>
</i>
<a type="button" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="{{Session::get('style_nav_link')}}">
    <img   data-toggle="tooltip" style="width:30px;height:40px;margin: 10px 0px 0px 10px;" title="Cerrar sesión"  src="{{ asset('./images/salir.png')}}" alt="Buscar">
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</li>

<a href="/form"><button type="button" class="btn btn-primary" style="margin: 10px 0px 0px 50px" title="Crear nuevo formulario"   >Nuevo formulario</button></a>
<div class="container" style="margin: 10px 0px 0px 80px">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre formulario</th>
          <th scope="col">Votos</th>
          <th scope="col">Acciones</th>
          <th scope="col">Activo</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="/formView">Formulario #1</a></td>
      <td><a href="/viewResult">8</a></td>
      <td>Editar | Eliminar</td>
      <td><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
             Si
         </label>
     </div></td>
     </tr>

     <tr>
      <th scope="row">2</th>
      <td><a href="/formView">Formulario #2</a></td>
      <td><a href="/viewResult">76</a></td>
      <td>Editar | Eliminar</td>
      <td><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
             Si
         </label>
     </div></td>
     </tr>

     <tr>
      <th scope="row">3</th>
      <td><a href="/formView">Formulario #3</a></td>
      <td><a href="/viewResult">58</a></td>
      <td>Editar | Eliminar</td>
      <td><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
             Si
         </label>
     </div></td>
     </tr>

     <tr>
      <th scope="row">4</th>
      <td><a href="/formView">Formulario #4</a></td>
      <td><a href="/viewResult">22</a></td>
      <td>Editar | Eliminar</td>
      <td><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
             Si
         </label>
     </div></td>
     </tr>

     <tr>
      <th scope="row">5</th>
      <td><a href="/formView">Formulario #5</a></td>
      <td><a href="/viewResult">5</a></td>
      <td>Editar | Eliminar</td>
      <td><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
             Si
         </label>
     </div></td>
     </tr>

</tbody>
</table>

</div>



</div>
</body>
</html>
