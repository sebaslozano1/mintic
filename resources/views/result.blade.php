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
<a type="button" href="/home" style="">
   <img   data-toggle="tooltip" style="width:30px;height:30px;margin: 10px 0px 0px 10px;" title="Regresar"  src="{{ asset('./images/regreso.png')}}" alt="Buscar">
</a>


</li>

<div class="container" style="margin: 10px 0px 0px 80px">

<h1 style="margin: 10px 0px 0px 10px;">Resultado encuesta: formulario # 1</h1>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre Usuario</th>
          <th scope="col">Color camiseta</th>
          <th scope="col">Color cabello</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Usuario #1</td>
      <td>Rojo</td>
      <td>Editar | Eliminar</td>
      
     </tr>

     <tr>
      <th scope="row">2</th>
      <td>Usuario #2</td>
      <td>Negro</td>
      <td>Rojo</td>
     
     </tr>

     <tr>
      <th scope="row">3</th>
      <td>Usuario #3</td>
      <td>Negro</td>
      <td>Cafe</td>
     
     </tr>

     <tr>
      <th scope="row">4</th>
      <td>Usuario #4</td>
      <td>Verde</td>
      <td>Azul</td>
      
     </tr>

     <tr>
      <th scope="row">5</th>
      <td>Usuario #5</td>
      <td>Rojo</td>
      <td>Azul</td>
      
     </tr>

</tbody>
</table>

</div>



</div>
</body>
</html>
