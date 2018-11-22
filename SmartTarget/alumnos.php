<!DOCTYPE html>
<html>
	<head>
		<title>Alumnos</title>
		<link rel="icon" type="image/png" href="./assets/icon/logo.ico" />
		<?php include './inc/navbar.php';?><!--Link que llama al navbar en la carpata de inc-->
	</head>
	<body>
		<div class="container-fluid">
	        <div class="jumbotron" align="center">
	            <h2><b>Alumnos</b></h2>
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
<!-----------Formulario de alta de alumnos------------------>
	    <div class="container">
	        <form action="/action_page.php">
	            <div class="form-group">
	                <input class="form-control" id="nombre" name="nombre" placeholder="Ingrese el/los nombre(s) del alumno" type="name" maxlength="30" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="apellidoP" name="apellidoP" placeholder="Ingrese el apellido paterno del alumno" maxlength="20" type="text" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="apellidoM" name="apellidoM" placeholder="Ingrese el apellido materno del alumno" maxlength="20" type="text" autocomplete="off"></input>
	            </div>
	            <div class="form-group">
	                <input class="form-control" id="curp" name="curp" placeholder="Ingrese el CURP del estudiante" onkeyup="this.value=this.value.toUpperCase();" maxlength="18" type="text" autocomplete="off"></input>
	            </div>
	            <div class="row">
	                <div class="form-group col-md-4">
						<label for="sel1">Turno</label>
						<select class="form-control" id="turno" name="turno">
							<option></option>
							<option>Matutino</option>
							<option>Vespertino</option>
							<option>Mixto</option>
							<option>Nocturno</option>
							<option>Sabatino</option>
						</select>
	                </div>
	                <div class="form-group col-md-4">
	                    <label for="sel1">Grado</label>
						<select class="form-control" id="grado" name="grado">
							<option></option>
							<option>1°</option>
							<option>2°</option>
							<option>3°</option>
							<option>4°</option>
							<option>5°</option>
							<option>6°</option>
						</select>
	                </div>
	                <div class="form-group col-md-4">
	                    <label for="sel1">Grupo</label>
						<select class="form-control" id="grupo" name="grupo">
							<option></option>
							<option>A</option>
							<option>B</option>
							<option>C</option>
						</select>
	                </div>
	            </div>
	        </form>
	        <button class="btn btn-success" id="btn-alumno" data-dismiss="modal" onclick="guardar_Alumnos(); limpiar();" type="button">Guardar</button>
	    </div>
	    <div class="container mt-3">
            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                    	<th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">CURP</th>
                        <th scope="col">Turno</th>
                        <th scope="col">Grado</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tablaalumnos">
                    <tr>
                    	<td></td>
                        <td></td>
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

