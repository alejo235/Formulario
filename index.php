<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Formulario</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contacto <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <section class="container pt-2 pb-5">
        <article class="needs-validation" novalidate>
            <form action="home.php" method="post" class="p-4 bg-dark text-white">
                <center>
                    <h2>Registro de Usuarios</h2>
                </center>
                <div class="form-row">

                    <div class="col-md-6 mb-3">
                        <i class="fa fa-user-circle-o fa-2x-"></i>
                    </div>
                </div>
                <div class="col-sm-5">
                    <label for="validationCustom01">Primer nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="ingrese su nombre">
                </div>
                </div>
                <br>
                </div>
                <div class="form-row">

                    <div class="col-md-6 mb-3">
                        <i class="fa fa-user-circle-o fa-2x-"></i>
                    </div>
                </div>
                <div class="col-sm-5">
                    <label for="validationCustom01">Apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="ingrese su apellido">
                </div>
                </div>
                </div>
                <br>
                <div class="form-row">

                    <div class="col-md-6 mb-3">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-sm-5">
                    <label for="validationCustom01">Direccion</label>
                    <input type="tel" class="form-control" name="direccion" placeholder="ingrese su direccion">
                </div>
                </div>
                </div>
                <br>
                <div class="form-row">

                    <div class="col-md-3 mb-3">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-sm-3">
                    <label for="validationCustom01">Correo</label>
                    <input type="email" class="form-control" name="correo" placeholder="ingrese su correo">
                </div>
                </div>
                </div>
                <br>
                <div class="form-row">

                    <div class="col-md-3 mb-3">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-sm-3">
                    <label for="validationCustom01">Telefono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="ingrese su telefono">
                </div>
                </div>
                </div>
                <br>
                <div class="form-row">

                    <div class="col-md-3 mb-3">
                        <i class="fa fa-venus-mars" aria-hidden="true"></i>

                    </div>
                </div>

                <div class="col-sm-2">
                    <label for="validationCustom01">Sexo</label>
                    <input type="text" class="form-control" name="sexo" placeholder="ingrese su sexo">
                </div>
                </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn- btn-danger">
                        <i class="fa fa-sing-in-">Registrarse</i>
                    </button>
                </div>
            </form>

        </article>

    </section>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>