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
  <a class="navbar-brand" href="#">Docufácil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/docufacil/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Acerca de Nosotros</a>
      </li>
    </ul>
  </div>
</nav>


    <a id="contacto">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Suscríbete Aquí</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label>Nombre: </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Apellido: </label>
                    <input type="text" name="Lname" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Contraseña: </label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Clave Única: </label>
                    <input type="password" name="key" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Ingresar</button>
            </form>
        </div>
    </section>
    </a>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>