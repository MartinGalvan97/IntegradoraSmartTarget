//CRUD DE ALUMNOS

//INGRESAR
  function guardar_Alumnos(){
    // Variables pasadas de html a javascript
    var nombre = document.getElementById('nombre').value;
    var apellidoP = document.getElementById('apellidoP').value;
    var apellidoM = document.getElementById('apellidoM').value;
    var turno = document.getElementById('turno').value;
    var grado = document.getElementById('grado').value;
    var grupo = document.getElementById('grupo').value;
    var curp = document.getElementById('curp').value;
    

    db.collection("alumnos").add({//se crea la tabla de usuarios
      Nombre: nombre,
      ApellidoP: apellidoP,
      ApellidoM: apellidoM,
      CURP:curp,
      Turno: turno,
      Grado: grado,
      Grupo: grupo,
  })
  .then(function(docRef) {
      console.log("Document written with ID: ", docRef.id);
      alert("El alumno fue registrado con exito")
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
  });
  };

//MODIFICAR
  function editar_alumno(id,Nombre,ApellidoP, ApellidoM, CURP, Turno, Grado, Grupo){
    document.getElementById('nombre').value = Nombre;
    document.getElementById('apellidoP').value = ApellidoP;
    document.getElementById('apellidoM').value = ApellidoM;
    document.getElementById('turno').value = Turno;
    document.getElementById('grado').value = Grado;
    document.getElementById('grupo').value = Grupo
    document.getElementById('curp').value = CURP;
    
    var boton = document.getElementById('btn-alumno');
    boton.innerHTML = 'Editar';

    boton.onclick = function(){
      var washingtonRef = db.collection("alumnos").doc(id);
      // Set the "capital" field of the city 'DC'
      // 
      var nombre = document.getElementById('nombre').value;
      var apellidoP = document.getElementById('apellidoP').value;
      var apellidoM = document.getElementById('apellidoM').value;
      var turno = document.getElementById('turno').value;
      var grado = document.getElementById('grado').value;
      var grupo = document.getElementById('grupo').value;
      var curp = document.getElementById('curp').value;
      limpiar();

      return washingtonRef.update({
          Nombre: nombre,
          ApellidoP: apellidoP,
          ApellidoM: apellidoM,
          CURP:curp,
          Turno: turno,
          Grado: grado,
          Grupo: grupo,
      })
      .then(function() {
          console.log("Document successfully updated!");
          boton.innerHTML = 'Guardar';
      })
      .catch(function(error) {
          // The document probably doesn't exist.
          console.error("Error updating document: ", error);
      });
    }
  }

//ELIMINAR
  function eliminar_alumno(id) {
    db.collection("alumnos").doc(id).delete().then(function() {
      console.log("Document successfully deleted!");
  }).catch(function(error) {
      console.error("Error removing document: ", error);
  });
  }

//LEER
  var tablaalumnos = document.getElementById('tablaalumnos');
  db.collection("alumnos").onSnapshot((querySnapshot) => {
    tablaalumnos.innerHTML = '';
        querySnapshot.forEach((doc) => {
          console.log(`${doc.id} => ${doc.data()}`);
          tablaalumnos.innerHTML +=`
          <tr>
            <td>${doc.id}</td>
            <td>${doc.data().Nombre}</td>
            <td>${doc.data().ApellidoP}</td>
            <td>${doc.data().ApellidoM}</td>
            <td>${doc.data().CURP}</td>
            <td>${doc.data().Turno}</td>
            <td>${doc.data().Grado}</td>
            <td>${doc.data().Grupo}</td>
            <td><button class="btn btn-warning" onclick="editar_alumno('${doc.id}','${doc.data().Nombre}','${doc.data().ApellidoP}','${doc.data().ApellidoM}','${doc.data().CURP}','${doc.data().Turno}',
            '${doc.data().Grado}', '${doc.data().Grupo}')"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-danger" onclick="eliminar_alumno('${doc.id}')"><i class="fas fa-times"></i></button></td>
          </tr>
          `
      });
  });

//LIMPIA LOS INPUTS AL REGISTARO MODIFICAR UN ALUMNO
  function limpiar(){
      document.getElementById("nombre").value = "";
      document.getElementById("apellidoP").value = "";
      document.getElementById("apellidoM").value = "";
      document.getElementById("turno").value = "";
      document.getElementById("grado").value = "";
      document.getElementById("grupo").value = "";
      document.getElementById("curp").value = "";
  }