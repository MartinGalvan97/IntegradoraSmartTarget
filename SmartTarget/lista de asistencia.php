<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Inicio
        </title>
        <link rel="icon" type="image/png" href="./assets/icon/logo.ico" />
         <?php include './inc/navbar.php';?><!--Link que llama al navbar en la carpata de inc-->
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="jumbotron">
                <h1>Lista de asistencia de </h1>
                <h2>3ro B</h2>
                
            </div>
        </div>
        <div class="container text-center">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>            
            </div>
        </div>
        
        <div class="container-fluid text-center p-3">
            <h1> Miercoles 21 del 2018 9:00 pm </h1>
            <h2>3ro B</h2>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th>Nombre(s)</th>
                    <th>Apellido paterno</th>
                    <th>Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Mala</td>
                        </tr>
                        <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>Llmada a los padres</td>
                        </tr>
                        <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>Malas palabras</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php include './inc/footer.php';?><!--Link que llama al footer en la carpeta inc-->