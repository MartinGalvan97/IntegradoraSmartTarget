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
       
        
        <div class="container-fluid text-center mr-sm-6 p-5">
        
        <input class="form-control mr-sm-6" type="text" placeholder="Buscar">
        
        </div>

        
        

        <div class="row p-5">
                  <div class="form-group col-md-4">
            <input class="form-control mr-sm-6" type="text" placeholder="Buscar">
                  </div>
                  <div class="form-group col-md-4">
                      <input class="form-control mr-sm-6" type="text" placeholder="Buscar">
                  </div>
                  <div class="form-group col-md-4">
                      <input class="form-control mr-sm-6" type="text" placeholder="Buscar">
                  </div>
              </div>
          </form>
             
     
    <div class="row" style="text-align: center;">
      <div class="form-group col-sm-12">
          <form action="/action_page.php">
              <select name="cars" class="custom-select col-sm-5">
                <option selected>Escoje escuela de preferencia</option>
                <option value="volvo">Volvo</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
              </select>

               <select name="cars" class="custom-select col-sm-5">
                <option selected>Escoje escuela de preferencia</option>
                <option value="volvo">Volvo</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
              </select>
            </form>
      </div>
    </div>

<div class="container text-center p-5">
  
  <form action="/action_page.php">
    <div class="form-group">
    
      <textarea class="form-control" rows="5" id="comment" name="text type="text" placeholder="Buscar""></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
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