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
<a type="button" href="/" style="">
   <img   data-toggle="tooltip" style="width:30px;height:30px;margin: 10px 0px 0px 10px;" title="Regresar"  src="{{ asset('./images/regreso.png')}}" alt="Buscar">
</a>


</li>




<div class="container">


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
