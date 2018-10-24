<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Registro Usuarios
        </title>
        <?php include './inc/navbar.php';?><br><br><br><!--Link que llama al navbar en la carpata de inc-->
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
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Ingrese sus datos
                                    </h4>
                                    <button class="close" data-dismiss="modal" type="button">
                                        ×
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <label for="name">
                                                Nombre:
                                            </label>
                                            <input class="form-control" id="nameM" name="nameM" placeholder="Ingrese su nombre(s)" type="name">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido">
                                                Apellido Paterno:
                                            </label>
                                            <input class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" type="apellido">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido">
                                                Apellido Materno:
                                            </label>
                                            <input class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" type="apellido">
                                            </input>
                                        </div>
                                        <!--boton del grupo-->
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                Grupo
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">
                                                    1A
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    2B
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    3C
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Correo:
                                            </label>
                                            <input class="form-control" id="email" name="email" placeholder="Ingrese su correo electronico" type="email">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">
                                                Contraseña:
                                            </label>
                                            <input class="form-control" id="pwd" name="pwd" placeholder="Crea una contraseña" type="password">
                                            </input>
                                        </div>
                                    </form>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-success" data-dismiss="modal" type="button">
                                        Registrar
                                    </button>
                                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                                        Cancelar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <button class="btn btn-success" data-dismiss="modal" type="button">
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
