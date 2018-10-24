<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Inicio
        </title>
         <?php include './inc/navbar.php';?><br><br><br><!--Link que llama al navbar en la carpata de inc-->
    </head>
    <body>
       
        <div class="container-fluid">
            <div class="jumbotron">
                <h2>
                    Bienvenido
                </h2>
                <p>
                    Seleccione el tipo de usuario
                </p>
                <div class="container">
                    <button class="btn btn-primary" data-target="#registro" data-toggle="modal" type="button">
                        Maestro (a)
                    </button>
                    <button class="btn btn-primary" data-target="#ingreso" data-toggle="modal" type="button">
                        Padre o Tutor
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include './inc/footer.php';?><!--Link que llama al footer en la carpeta inc-->

<!-- The Modal registrar -->
    <div class="modal fade" id="registro">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">
                        Registre su correo y contraseña
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
                            <input class="form-control" id="contrasena" name="pwd" placeholder="Enter password" type="password">
                            </input>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-success" data-dismiss="modal" onclick="registrar()" type="button">
                                Regitrar
                            </button>
                            <button class="btn btn-danger" data-dismiss="modal" type="button">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Modal de inicio de sesion -->
    <div class="modal fade" id="ingreso">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">
                        Registre su correo y contraseña
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
                            <input class="form-control" id="email1" name="email" placeholder="Enter email" type="email">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="pwd">
                                Contraseña:
                            </label>
                            <input class="form-control" id="contrasena1" name="pwd" placeholder="Enter password" type="password">
                            </input>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-success" data-dismiss="modal" onclick="ingresar()" type="button">
                                iniciar sesion
                            </button>
                            <button class="btn btn-danger" data-dismiss="modal" onclick="cerrar()" type="button">
                                cerrar sesion
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>