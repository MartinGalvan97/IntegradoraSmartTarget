<!DOCTYPE html>
<html>
	<head>
		<title>Escuelas</title>
		<link rel="icon" type="image/png" href="./assets/icon/logo.ico" />
		<?php include './inc/navbar.php';?><!--Link que llama al navbar en la carpata de inc-->
	</head>
	<body>
		<div class="container-fluid">
	        <div class="jumbotron" align="center">
	            <h2><b>ESCUELA</b></h2>
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
<!-----------Formulario de alta deS escuelas ------------------>
	    <div class="container">
	        <form action="/action_page.php">
	            <div class="form-group">
	                <input class="form-control" id="nombreplantel" name="nombreplantel" placeholder="Ingrese el nombre del plantel" type="name" maxlength="50" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="claveCT" name="claveCT" placeholder="Ingrese la clave de C.T." maxlength="20" type="number" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion de la escuela" maxlength="100" type="text" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="colonia" name="colonia" placeholder="Ingrese la colonia"  maxlength="50" type="text" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="municipio" name="municipio" placeholder="Ingrese el municipio al que pertenece la escuela" maxlength="100" type="text" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="estado" name="estado" placeholder="Ingrese elestado al que pertenece el municipio" maxlength="30" type="text" autocomplete="off"></input>
	            </div>
	        </form>
	        <button class="btn btn-success" id="btn-escuela" data-dismiss="modal" onclick="guardar_Escuela(); limpiar();" type="button">Guardar</button>
	    </div>
	    <div class="container mt-3">
            <table class="table table-responsive my-3">
                <thead>
                    <tr>
                    	<th scope="col">ID</th>
                        <th scope="col">Nombre Plantel</th>
                        <th scope="col">Clave C.T.</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Colonia</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tablaescuelas">
                    <tr>
                    	<td></td>
                        <td></td>
                        <td></td>
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
