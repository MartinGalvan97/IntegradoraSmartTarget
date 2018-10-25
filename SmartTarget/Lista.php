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
                <h2>
                    <b>USUARIOS</b>
                </h2>
                <button class="btn btn-danger btn-lg" data-target="#myModal" data-toggle="modal" type="button">
                    <b>Eliminar</b>
                </button>
                <button class="btn btn-info btn-lg" data-target="#my" data-toggle="modal" type="button">
                    <b>Modificar</b>
                </button>
            </div> 
        </div>  
    </body>
</html>
<div class="container mt-3">
    <h2>
        Tabla de usuarios
    </h2>
    <input class="form-control" id="myInput" placeholder="Buscar nombre" type="text">
        <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Apellido paterno
                        </th>
                        <th>
                            Apellido materno
                        </th>
                        <th>
                            Nombres
                        </th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>
                            1234
                        </td>
                        <td>
                            Casas
                        </td>
                        <td>
                            Unas
                        </td>
                        <td>
                            Armando
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1234
                        </td>
                        <td>
                            Casas
                        </td>
                        <td>
                            Unas
                        </td>
                        <td>
                            Armando
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1234
                        </td>
                        <td>
                            Casas
                        </td>
                        <td>
                            Unas
                        </td>
                        <td>
                            Armando
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1234
                        </td>
                        <td>
                            Casas
                        </td>
                        <td>
                            Unas
                        </td>
                        <td>
                            Armando
                        </td>
                    </tr>
                </tbody>
            </table>
        </br>
    </input>
</div>
<!-- Modal tabla de modificacion-->
<div class="modal fade" id="my" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modal-mid">
            <div class="modal-header">
                <h4 class="modal-title">
                    Modal Header
                </h4>
                <button class="close" data-dismiss="modal" type="button">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h2>
                        Tabla de usuarios
                    </h2>
                    <input class="form-control col-md-4" id="myInput" placeholder="Buscar nombre" type="text"/>
                    <br>
                        <table class="table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Apellido paterno
                                    </th>
                                    <th>
                                        Apellido materno
                                    </th>
                                    <th>
                                        Nombres
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td>
                                        1234
                                    </td>
                                    <td>
                                        Casas
                                    </td>
                                    <td>
                                        Unas
                                    </td>
                                    <td>
                                        Armando
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1234
                                    </td>
                                    <td>
                                        Casas
                                    </td>
                                    <td>
                                        Unas
                                    </td>
                                    <td>
                                        Armando
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1234
                                    </td>
                                    <td>
                                        Casas
                                    </td>
                                    <td>
                                        Unas
                                    </td>
                                    <td>
                                        Armando
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1234
                                    </td>
                                    <td>
                                        Casas
                                    </td>
                                    <td>
                                        Unas
                                    </td>
                                    <td>
                                        Armando
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </br>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
<?php include './inc/footer.php';?>
<!--Link que llama al footer en la carpeta inc-->
