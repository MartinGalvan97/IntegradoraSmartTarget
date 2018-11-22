//CRUD DE ESCUELA

//INGRESAR
  function guardar_Escuela(){
    // Variables pasadas de html a javascript
    var nombrePlantel = document.getElementById('nombreplantel').value;
    var claveCT = document.getElementById('claveCT').value;
    var direccion = document.getElementById('direccion').value;
    var colonia = document.getElementById('colonia').value;
    var municipio = document.getElementById('municipio').value;
    var estado = document.getElementById('estado').value;

    db.collection("escuelas").add({//se crea la tabla de usuarios
      NombrePlantel: nombrePlantel,
      ClaveCT: claveCT,
      Direccion: direccion,
      Colonia: colonia,
      Municipio: municipio,
      Estado: estado,
  })
  .then(function(docRef) {
      console.log("Document written with ID: ", docRef.id);
      alert("La escuela fue registrado con exito")
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
      alert(error);
  });
  };

//MODIFICAR
  function editar_escuela(id,NombrePlantel,ClaveCT,Direccion,Colonia,Municipio,Estado){
    document.getElementById('nombreplantel').value = NombrePlantel;
    document.getElementById('claveCT').value = ClaveCT;
    document.getElementById('direccion').value = Direccion;
    document.getElementById('colonia').value = Colonia;
    document.getElementById('municipio').value = Municipio;
    document.getElementById('estado').value = Estado;
    var boton = document.getElementById('btn-escuela');
    boton.innerHTML = 'Editar';

    boton.onclick = function(){
      var washingtonRef = db.collection("escuelas").doc(id);
      // Set the "capital" field of the city 'DC'
      // 
      var nombrePlantel = document.getElementById('nombreplantel').value;
      var claveCT = document.getElementById('claveCT').value;
      var direccion = document.getElementById('direccion').value;
      var colonia = document.getElementById('colonia').value;
      var municipio = document.getElementById('municipio').value;
      var estado = document.getElementById('estado').value;
      limpiar_escuelas();
      return washingtonRef.update({
          NombrePlantel: nombrePlantel,
          ClaveCT: claveCT,
          Direccion: direccion,
          Colonia: colonia,
          Municipio: municipio,
          Estado: estado,
      })
      .then(function() {
          console.log("Document successfully updated!");
          boton.innerHTML = 'Guardar';
          alert("La escuela se modifico exitosamente")

      })
      .catch(function(error) {
          // The document probably doesn't exist.
          console.error("Error updating document: ", error);
          alert(error);
      });
    }
  }

//ELIMINAR
  function eliminar_escuela(id) {
    db.collection("escuelas").doc(id).delete().then(function() {
      console.log("Document successfully deleted!");
  }).catch(function(error) {
      console.error("Error removing document: ", error);
  });
  }

//LEER
  var tablaescuelas = document.getElementById('tablaescuelas');
  db.collection("escuelas").onSnapshot((querySnapshot) => {
    tablaescuelas.innerHTML = '';
        querySnapshot.forEach((doc) => {
          console.log(`${doc.id} => ${doc.data()}`);
          tablaescuelas.innerHTML +=`
          <tr>
            <td>${doc.id}</td>
            <td>${doc.data().NombrePlantel}</td>
            <td>${doc.data().ClaveCT}</td>
            <td>${doc.data().Direccion}</td>
            <td>${doc.data().Colonia}</td>
            <td>${doc.data().Municipio}</td>
            <td>${doc.data().Estado}</td>
            <td><button class="btn btn-warning" onclick="editar_escuela('${doc.id}','${doc.data().NombrePlantel}','${doc.data().ClaveCT}','${doc.data().Direccion}','${doc.data().Colonia}','${doc.data().Municipio}',
            '${doc.data().Estado}')"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-danger" onclick="eliminar_escuela('${doc.id}')"><i class="fas fa-times"></i></button></td>
          </tr>
          `
      });
  });

function limpiar_escuelas() {
    document.getElementById("nombreplantel").value = "";
    document.getElementById("claveCT").value = "";
    document.getElementById("direccion").value = "";
    document.getElementById("colonia").value = "";
    document.getElementById("municipio").value = "";
    document.getElementById("estado").value = "";
}