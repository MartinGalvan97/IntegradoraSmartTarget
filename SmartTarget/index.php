<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Inicio
        </title>
         <?php include './inc/navbar.php';?><!--Link que llama al navbar en la carpata de inc-->
    </head>
    <body>
       
        <div class="container-fluid">
            <div class="jumbotron">
                <h2>Bienvenido</h2>
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