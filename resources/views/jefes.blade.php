@extends('plantilla')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Jefes</title>
  </head>
  <body>

    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <div class="position-absolute top-0 start-50 translate-middle-x display-4 fw-normal">Jefes Principales</div>
            <p class="lead fw-normal">Estos son algunos de los jefes principales del juego</p> 
        </div>
          <div class="product-device shadow-sm d-none d-md-block"></div>
          <img src="JefesReyDado.jpg" class="img-fluid" width="100%" height="100%">
          <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
              <div class="position-absolute top-0 start-50 translate-middle-x display-4 fw-normal">El Diablo</div>
              <p class="lead fw-normal">El jefe final del juego y el mas dificil de matar, debido a que tiene diferentesmecanicas y esto hacen que sea una de las partes mas complicadas.</p> 
          </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <img src="Diablo.jpg" class="img-fluid" width="100%" height="100%">
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
          </div>

          <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
              <div class="position-absolute top-0 start-50 translate-middle-x display-4 fw-normal">Rey Dado</div>
              <p class="lead fw-normal">Estees el penultimo jefe del juego, y la dificultad de este, es porque debemos enfrentarnos al menos a 9 jefes diferentes para poder luchar contra el, y durante todo el trayecto solo contamos con 3 vidas y 2 disparos unicos, esto lo hace aun mas dificil de lograr</p> 
          </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <img src="ReyDado.jpg" class="img-fluid" width="100%" height="100%">
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
          </div>

    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

@endsection