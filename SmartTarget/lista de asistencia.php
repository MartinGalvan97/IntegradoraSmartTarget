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
        
        <div class="container-fluid text-center mr-sm-6">
        
        <input class="form-control mr-sm-6" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
        
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