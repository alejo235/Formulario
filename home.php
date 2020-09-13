<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">

    <title>home</title>
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
    <div class="alert alert-success alert-dissimissible fade show" role="alert">
        <strong>bienvenido<?php echo htmlspecialchars($_POST['nombre']); ?>!.</strong>nombre registrado exitosamente
        <button type="button" class="close" data dissmiss="alert"></button>
        <span>&times;</span>
    </div>
    <div class="alert alert-success alert-dissimissible fade show" role="alert">
        <strong>apellido<?php echo htmlspecialchars($_POST['apellido']); ?>!.</strong>apellido registrado exitosamente
        <button type="button" class="close" data dissmiss="alert"></button>
        <span>&times;</span>
    </div>
    <div class="alert alert-success alert-dissimissible fade show" role="alert">
        <strong>direccion<?php echo htmlspecialchars($_POST['direccion']); ?>!.</strong>direccion registrada exitosamente
        <button type="button" class="close" data dissmiss="alert"></button>
        <span>&times;</span>
    </div>
    <div class="alert alert-success alert-dissimissible fade show" role="alert">
        <strong>correo<?php echo htmlspecialchars($_POST['correo']); ?>!.</strong>correo registrado exitosamente
        <button type="button" class="close" data dissmiss="alert"></button>
        <span>&times;</span>
    </div>
    <div class="alert alert-success alert-dissimissible fade show" role="alert">
        <strong>telefono<?php echo htmlspecialchars($_POST['telefono']); ?>!.</strong>telefono registrado exitosamente
        <button type="button" class="close" data dissmiss="alert"></button>
        <span>&times;</span>
    </div>
    <div class="alert alert-success alert-dissimissible fade show" role="alert">
        <strong>sexo<?php echo htmlspecialchars($_POST['sexo']); ?>!.</strong>sexo registrado exitosamente
        <button type="button" class="close" data dissmiss="alert"></button>
        <span>&times;</span>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</body>

</html>