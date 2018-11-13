<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Dashboard
        </title>
        <link rel="icon" type="image/png" href="./assets/icon/logo.ico" />
        <?php include './inc/navbar.php';?><!--Link que llama al navbar en la carpata de inc-->
    </head>
    <body>
        <div class="container" style="margin-top:100px">
            <div class="row">
                <h1>
                    246 alumnos actualmente
                </h1>
                <ul>
                </ul>
            </div>
            <div class="container">
                <h2>
                    Salones
                </h2>
                <div class="table-condensed table-hover">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Salon
                                </th>
                                <th>
                                    Numero de alumnos
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-hover">
                                    1-B
                                </td>
                                <td>
                                    35
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1-B
                                </td>
                                <td>
                                    35
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1-B
                                </td>
                                <td>
                                    35
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container mt-3 p-3">
                <h2>
                    Salon 1-B
                </h2>
                <input class="form-control" id="myInput" placeholder="Buscar nombre" type="text">
                    <br>
                        <table class="table table-bordered table-hover">
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
                                    <th>
                                        Calificacion
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
                                    <td>
                                        8.5
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
                                    <td>
                                        8.5
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
                                    <td>
                                        8.5
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
                                    <td>
                                        8.5
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </br>
                </input>
            </div>
        </div>
    </body>
</html>
<?php include './inc/footer.php';?>
<!--Link que llama al footer en la carpeta inc-->
