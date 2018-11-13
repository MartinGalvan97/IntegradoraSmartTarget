<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Registro Usuarios
        </title>
        <link rel="icon" type="image/png" href="./assets/icon/logo.ico" />
        <?php include './inc/navbar.php';?><!--Link que llama al navbar en la carpata de inc-->
    </head>
    <body>
        <!--botones con formilarios?-->
        <div class="container-fluid">
            <!--jumbotron-->
            <div class="jumbotron">
                <h2>
                    Bienvenido
                </h2>
                <p>
                    Seleccione el tipo de usuario
                </p>
                <!--otro boton-->
                <div class="container">
                    <!-- Button to Open the Modal -->
                    <button class="btn btn-primary" data-target="#myModal" data-toggle="modal" type="button">
                        Maestro (a)
                    </button>
                    <button class="btn btn-primary" data-target="#myModal" data-toggle="modal" type="button">
                        Padre o Tutor
                    </button>
                    
                </div>
                <!-- Button to Open the Modal -->
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    Ingrese su correo y contraseña
                                </h4>
                                <button class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="email">
                                            Correo:
                                        </label>
                                        <input class="form-control" id="email" name="email" placeholder="Enter email" type="email">
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">
                                            Contraseña:
                                        </label>
                                        <input class="form-control" id="pwd" name="pwd" placeholder="Enter password" type="password">
                                        </input>
                                    </div>
                                </form>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button class="btn btn-success" onclick="guardar()" data-dismiss="modal" type="button">
                                    Iniciar sesion
                                </button>
                                <button class="btn btn-danger" data-dismiss="modal" type="button">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include './inc/footer.php';?>
<!--Link que llama al footer en la carpeta inc-->
