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




<div class="container">

<h1 style="margin: -10px 0px 0px 100px;">Editar formulario</h1>

<div class="card col-12" style=" margin: 10px;">
  <div class="card-body col-12">
    
  <div class="mb-12 row">
    <label for="nameForm" class="col-sm-2 col-form-label">Nombre Formulario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nameForm" value="Formulario #1">
    </div>
  </div>

  <div class="mb-12 row"   style=" margin: 10px;">
<div class="col-md-6">
    <label for="nameInput" class="form-label">Nombre campo</label>
    <input type="text" class="form-control" id="nameInput" >
  </div>
  <div class="col-md-6">
    <label for="tipeInput" class="form-label">Tipo campo</label>
    <select id="inputState" class="form-select">
      <option selected>Seleccione...</option>
      <option>Number</option>
      <option>Text</option>
      <option>Select</option>
      <option>Text área</option>
      <option>Radio</option>
    </select>
  </div>
  </div>

  <div class="mb-12 row"   style=" margin: 10px;">
    <div class="col-md-6">
<a href="/form"><button type="button" class="btn btn-primary" style="margin: 10px 0px 0px 0px" title="Crear nuevo formulario"   >Guardar formulario</button></a>
  </div>
    <div class="col-md-6">

<a href="/form"><button type="button" class="btn btn-primary" style="margin: 10px 0px 0px s0px" title="Crear nuevo formulario"   >Nuevo campo</button></a>
  </div>

  </div>


  </div>
</div>



<h2 style="margin: 20px 0px 0px 0px;">Formulario # 1</h2>


  <div class="mb-12 row"   style=" margin: 20px 0px 0px 0px;">
<div class="col-md-6">
    <label for="tipeInput" class="form-label">Color camiseta</label>
    <input type="text" class="form-control" id="nameInput">
  </div>
  <div class="col-md-6">
    <label for="tipeInput" class="form-label">Color cabello</label>
    <input type="text" class="form-control" id="nameInput">
  </div>
  </div>




</div>

</div>
</body>
</html>
