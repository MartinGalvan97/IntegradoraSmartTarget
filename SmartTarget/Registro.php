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

                <h1>Registro</h1>
            </div>
        </div>
        
        <div class="container-fluid bg-2 text-center p-2">
  <h3 class="margin">Que tipo de Usuario es?</h3>
  <a href="#" class="btn btn-success active btn-lg">
    <span class="glyphicon glyphicon-search"></span> Padre
  </a>
  <a href="#" class="btn btn-success btn-lg">
    <span class="glyphicon glyphicon-search"></span> Profesor
  </a>
</div>
   
    <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Matricula" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Codigo de tarjeta" type="email" required>
        </div>

</div>

    
</div>


      <div class="row ">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="contrasena" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="contrasena" type="email" required>
        </div>


      </div>

      <div class="container-fluid">
    <div class="row"></div>
  <form action="/action_page.php">
    <select name="cars" class="custom-select">
      <option selected>Escoje escuela de preferencia</option>
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
     <select name="cars" class="custom-select">
      <option selected>Grado academico</option>
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
  </form>
  </div>

   </form>
  </div>   
    <button type="button bg-2 text-center" class="btn btn-link">Llenar informacion de contacto y otros</button>  
</div>
      <div class="row">
        <div class="container-fluid bg-2 text-center p-2">
          <button type="button" class="btn btn-primary center">Iniciar Sesion</button>
        </div>
        <div class="container-fluid bg-2 text-center">
          <button type="button" class="btn btn-primary center">Registrarse con CARDCLOUD</button>
        </div>


        </div>


        <div class="container" id="contenedor">
             <?php echo '<p>Alumno ingresado</p>' . htmlspecialchars($_GET["rfid"]); ?>

             <input type="text" value="" id="test" name="test"> 
             <button class="btn btn-success" id="btn-alumno" data-dismiss="modal" onclick="guardar_rfid();" type="button">Guardar</button>
        </div>

    </body>
    <script type="text/javascript">
      function guardar_rfid(){
    // Variables pasadas de html a javascript

    var rfid = '<?php echo  htmlspecialchars($_GET["rfid"]); ?>'

    db.collection("rfid").add({//se crea la tabla de usuarios
      RFID: rfid
  })
  .then(function(docRef) {
      console.log("Document written with ID: ", docRef.id);
      alert("El alumno fue registrado con exito")
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
  });
  };
</script>
</html>
<?php include './inc/footer.php';?><!--Link que llama al footer en la carpeta inc-->