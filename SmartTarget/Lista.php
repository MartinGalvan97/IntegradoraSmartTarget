<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Listas
        </title>
        <?php include './inc/navbar.php';?><!--Link que llama al navbar en la carpata de inc-->
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron" align="center">
                <h2><b>USUARIOS</b></h2>
                <button class="btn btn-primary btn-lg" data-target="#altamaestro" data-toggle="modal"  type="button">
                    <i class="fas fa-plus"></i>
                </button>
                <button class="btn btn-danger btn-lg" data-target="#myModal" data-toggle="modal" type="button">
                    <i class="fas fa-times"></i>
                </button>
                <button class="btn btn-info btn-lg" data-target="#my" data-toggle="modal" type="button">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </div> 
        </div>
        <div class="container">
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="name">
                        Nombre:
                    </label>
                    <input class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre(s)" type="name" autocomplete="off">
                    </input>
                </div>
                <div class="form-group">
                    <label for="apellido">
                        Apellido Paterno:
                    </label>
                    <input class="form-control" id="apellidoP" name="apellidoP" placeholder="Ingrese su apellido" type="apellido" autocomplete="off">
                    </input>
                </div>
                <div class="form-group">
                    <label for="apellido">
                        Apellido Materno:
                    </label>
                    <input class="form-control" id="apellidoM" name="apellidoM" placeholder="Ingrese su apellido" type="apellido" autocomplete="off">
                    </input>
                </div>
                <div class="form-group">
                    <label for="email">
                        Correo:
                    </label>;
                    <input class="form-control" id="email" name="email" placeholder="Ingrese su correo electronico" type="email" autocomplete="off">
                    </input>
                </div>
                <div class="form-group">
                    <label for="pwd">
                        Contraseña:
                    </label>
                    <input class="form-control" id="password" name="password" placeholder="Crea una contraseña" type="password" autocomplete="off">
                    </input>
                </div>
            </form>
            <button class="btn btn-success" id="boton" data-dismiss="modal" onclick="guardar()" type="button">Guardar</button>
        </div>
        <div class="container mt-3">
            <h2>Tabla de usuarios</h2>
            <input class="form-control table-responsive" id="myInput" placeholder="Buscar nombre" type="text"></input><br>
            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Modificar</th>
                    </tr>
                </thead>
                <tbody id="tablamaestros">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table></br>
        </div>
    </body>
</html>
<?php include './inc/footer.php';?><!--Link que llama al footer en la carpeta inc-->