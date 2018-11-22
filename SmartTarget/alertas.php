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
       
        <div class="container text-center">
          <h1>Alerta conductas</h1>
        </div>

        <div class="container">
          <div class="form-group col-sm-12">
            <div class="row">
              <h3>Yohan Castorena</h3>
              
              <button type="button" class="btn btn-primary center">Asistio</button>
              <button type="button" class="btn btn-primary center">no asistio</button>

            </div>
          </div>
        </div>
            <div class="container">
          <div class="form-group col-sm-12">
            <div class="row">
              <h3>Yohan Castorena</h3>
              
              <button type="button" class="btn btn-primary center">Asistio</button>
              <button type="button" class="btn btn-primary center">no asistio</button>

            </div>
          </div>
        </div>
              
        <div class="container">
          <div class="form-group col-sm-12">
            <div class="row">
              <h3>Yohan Castorena</h3>
              
              <button type="button" class="btn btn-primary center">Asistio</button>
              <button type="button" class="btn btn-primary center">no asistio</button>

            </div>
          </div>
        </div>            



<div class="container">
          <div class="form-group col-sm-12">
            <div class="row">
              <h3>Yohan Castorena</h3>
              
              <button type="button" class="btn btn-primary center">Asistio</button>
              <button type="button" class="btn btn-primary center">no asistio</button>

            </div>
          </div>
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