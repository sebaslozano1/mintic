<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  @section('style')

  <style>

  body {
    font-family: 'Nunito', sans-serif;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  color: blue;
  font-size: 30px;

}

A:link {text-decoration:none;color:blue;}
A:active {text-decoration:none;color:#ff0000;}
A:hover {text-decoration:underline;color:gold;} 

nav{
    background-color: gold;
    width: 100%;
    height: 50px;
}

</style>
@show

</head>



</html>
