<!DOCTYPE html>
<html lang="en">
<head>
<title>Bienvenido/a A Docufácil!</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand nav" href="#">Docufácil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link nav" href="http://localhost/docufacil/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav" href="#contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav" href="http://localhost/docufacil/info.php">Acerca de Nosotros</a>
      </li>
    </ul>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/files1.jfif" class="img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Tu información más cerca tuyo</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/files2.jpg" class="img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Todos tus documentos a un click de distancia</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/files3.jpg" class="img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Organiza tus documentos de manera online</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>


    <a id="contacto">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">¿Listo/a Para Cambiar La Forma En La Que Haces Trámites?</h2>
            
        </div>
        <a href="http://localhost/docufacil/login.php" id="register">
          <button type="submit" class="btn btn-success btn-lg" id="ingresar">Ingresar</button>
        </a>
          
    </section>
    </a>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>