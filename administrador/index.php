<?php
    session_start();

    // Este código es estático, se puede hacer dinámico.
    if($_POST) {
        if($_POST['usuario'] == "Iván" && $_POST['contraseña'] == "sistema") {
            $_SESSION['usuario'] = "ok";
            $_SESSION['nombreUsuario'] = "Iván";

            header('Location:inicio.php');
        } else {
            $mensaje = "Error: El usuario o contraseña son incorrectos";
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

        <div class="col-md-4">
            
        </div>

            <div class="col-md-4">
                <br/><br/><br/>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <?php if(isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>

                        <form method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Usuario:</label>
                                <input type="text" class="form-control" name='usuario' placeholder="Escribe tu usuario">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña:</label>
                                <input type="password" class="form-control" name="contraseña" placeholder="Escribe tu contraseña">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary col-md-6">Entrar al administrador</button>
                                <a href="http://localhost/sitioweb/" class="btn btn-danger col-md-5 text-white">Volver a la web</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>