//CRUD DE MAESTROS

//INGRESAR
  function guardar_Maestros(){
    // Variables pasadas de html a javascript
    var nombre = document.getElementById('nombre').value;
    var apellidoP = document.getElementById('apellidoP').value;
    var apellidoM = document.getElementById('apellidoM').value;
    var turno = document.getElementById('turno').value;
    var grado = document.getElementById('grado').value;
    var grupo = document.getElementById('grupo').value;
    var curp = document.getElementById('curp').value;
    var matricula = document.getElementById('matricula').value;

    db.collection("maestros").add({//se crea la tabla de usuarios
      Nombre: nombre,
      ApellidoP: apellidoP,
      ApellidoM: apellidoM,
      CURP: curp,
      Turno: turno,
      Grado: grado,
      Grupo: grupo,
      Matricula: matricula
  })
  .then(function(docRef) {
      console.log("Document written with ID: ", docRef.id);
      alert("El maestro fue registrado con exito")
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
      alert(error);
      return('maestros.php');
  });
  };

//MODIFICAR
  function editar_Maestro(id,Nombre,ApellidoP, ApellidoM, CURP, Turno, Grado, Grupo, Matricula){
    document.getElementById('nombre').value = Nombre;
    document.getElementById('apellidoP').value = ApellidoP;
    document.getElementById('apellidoM').value = ApellidoM;
    document.getElementById('turno').value = Turno;
    document.getElementById('grado').value = Grado;
    document.getElementById('grupo').value = Grupo
    document.getElementById('curp').value = CURP;
    document.getElementById('matricula').value = Matricula;
    var boton = document.getElementById('btn-maestro');
    boton.innerHTML = 'Editar';

    boton.onclick = function(){
      var washingtonRef = db.collection("maestros").doc(id);
      // Set the "capital" field of the city 'DC'
      // 
      var nombre = document.getElementById('nombre').value;
      var apellidoP = document.getElementById('apellidoP').value;
      var apellidoM = document.getElementById('apellidoM').value;
      var turno = document.getElementById('turno').value;
      var grado = document.getElementById('grado').value;
      var grupo = document.getElementById('grupo').value;
      var curp = document.getElementById('curp').value;
      var matricula = document.getElementById('matricula').value;
      limpiar_maestros();

      return washingtonRef.update({
          Nombre: nombre,
          ApellidoP: apellidoP,
          ApellidoM: apellidoM,
          CURP:curp,
          Turno: turno,
          Grado: grado,
          Grupo: grupo,
          Matricula: matricula,
      })
      .then(function() {
          console.log("Document successfully updated!");
          boton.innerHTML = 'Guardar';
          alert("Maestro modificado exitosamente");
      })
      .catch(function(error) {
          // The document probably doesn't exist.
          console.error("Error updating document: ", error);
          alert(error);
          return('maestros.php');
      });
    }
  }

//ELIMINAR
  function eliminar_Maestros(id) {
    db.collection("maestros").doc(id).delete().then(function() {
      console.log("Document successfully deleted!");
  }).catch(function(error) {
      console.error("Error removing document: ", error);
  });
  }

//LEER
  var tablamaestros = document.getElementById('tablamaestros');
  db.collection("maestros").onSnapshot((querySnapshot) => {
    tablamaestros.innerHTML = '';
        querySnapshot.forEach((doc) => {
          console.log(`${doc.id} => ${doc.data()}`);
          tablamaestros.innerHTML +=`
          <tr>
            <td>${doc.id}</td>
            <td>${doc.data().Nombre}</td>
            <td>${doc.data().ApellidoP}</td>
            <td>${doc.data().ApellidoM}</td>
            <td>${doc.data().CURP}</td>
            <td>${doc.data().Turno}</td>
            <td>${doc.data().Grado}</td>
            <td>${doc.data().Grupo}</td>
            <td>${doc.data().Matricula}</td>
            <td><button class="btn btn-warning" onclick="editar_Maestro('${doc.id}','${doc.data().Nombre}','${doc.data().ApellidoP}','${doc.data().ApellidoM}','${doc.data().CURP}','${doc.data().Turno}',
            '${doc.data().Grado}', '${doc.data().Grupo}', '${doc.data().Matricula}')"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-danger" onclick="eliminar_Maestro('${doc.id}')"><i class="fas fa-times"></i></button></td>
          </tr>
          `
      });
  });

function limpiar_maestros() {
    document.getElementById("nombre").value = "";
    document.getElementById("apellidoP").value = "";
    document.getElementById("apellidoM").value = "";
    document.getElementById("turno").value = "";
    document.getElementById("grado").value = "";
    document.getElementById("grupo").value = "";
    document.getElementById("curp").value = "";
    document.getElementById("matricula").value = "";
}