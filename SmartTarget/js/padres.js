//CRUD DE PADRES

//INGRESAR
  function guardar_Padres(){
    // Variables pasadas de html a javascript
    var nombre = document.getElementById('nombre').value;
    var apellidoP = document.getElementById('apellidoP').value;
    var apellidoM = document.getElementById('apellidoM').value;
    var numcel = document.getElementById('numcel').value;
    var direccion = document.getElementById('direccion').value;
    var empleo = document.getElementById('empleo').value;
    var numempleo = document.getElementById('numempleo').value;

    db.collection("padres").add({//se crea la tabla de usuarios
      Nombre: nombre,
      ApellidoP: apellidoP,
      ApellidoM: apellidoM,
      Numcel:numcel,
      Direccion: direccion,
      Empleo: empleo,
      Numempleo: numempleo,
      //Matricula: matricula
  })
  .then(function(docRef) {
      console.log("Document written with ID: ", docRef.id);
      alert("El padre fue registrado con exito")
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
      alert(error);
      return('padres.php');
  });
  };

//MODIFICAR
  function editar_Padres(id,Nombre,ApellidoP, ApellidoM, numcel, direccion, empleo, numempleo){
    document.getElementById('nombre').value = Nombre;
    document.getElementById('apellidoP').value = ApellidoP;
    document.getElementById('apellidoM').value = ApellidoM;
    document.getElementById('numcel').value = numcel;
    document.getElementById('direccion').value = direccion;
    document.getElementById('empleo').value = empleo;
    document.getElementById('numempleo').value = numempleo;
    var boton = document.getElementById('btn-padre');
    boton.innerHTML = 'Editar';

    boton.onclick = function(){
      var washingtonRef = db.collection("padres").doc(id);
      // Set the "capital" field of the city 'DC'
      // 
      var nombre = document.getElementById('nombre').value;
      var apellidoP = document.getElementById('apellidoP').value;
      var apellidoM = document.getElementById('apellidoM').value;
      var numcel = document.getElementById('numcel').value;
      var direccion = document.getElementById('direccion').value;
      var empleo = document.getElementById('empleo').value;
      var numempleo = document.getElementById('numempleo').value;
      limpiar();

      return washingtonRef.update({
          Nombre: nombre,
          ApellidoP: apellidoP,
          ApellidoM: apellidoM,
          numcel: numcel,
          direccion: direccion,
          empleo: empleo,
          numempleo: numempleo,
          // Matricula: matricula,
      })
      .then(function() {
          console.log("Document successfully updated!");
          boton.innerHTML = 'Guardar';
          alert("Padre modificado exitosamente");
      })
      .catch(function(error) {
          // The document probably doesn't exist.
          console.error("Error updating document: ", error);
          alert(error);
          return('padres.php');
      });
    }
  }

//ELIMINAR
  function eliminar_Padres(id) {
    db.collection("padres").doc(id).delete().then(function() {
      console.log("Document successfully deleted!");
  }).catch(function(error) {
      console.error("Error removing document: ", error);
  });
  }

//LEER
  var tablapadres = document.getElementById('tablapadres');
  db.collection("padres").onSnapshot((querySnapshot) => {
    tablapadres.innerHTML = '';
        querySnapshot.forEach((doc) => {
          console.log(`${doc.id} => ${doc.data()}`);
          tablapadres.innerHTML +=`
          <tr>
            <td>${doc.id}</td>
            <td>${doc.data().Nombre}</td>
            <td>${doc.data().ApellidoP}</td>
            <td>${doc.data().ApellidoM}</td>
            <td>${doc.data().numcel}</td>
            <td>${doc.data().direccion}</td>
            <td>${doc.data().empleo}</td>
            <td>${doc.data().numempleo}</td>
            <td><button class="btn btn-warning" onclick="editar_Padres('${doc.id}','${doc.data().Nombre}','${doc.data().ApellidoP}','${doc.data().ApellidoM}','${doc.data().numcel}','${doc.data().direccion}',
            '${doc.data().empleo}', '${doc.data().numempleo}')"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-danger" onclick="eliminar_Padres('${doc.id}')"><i class="fas fa-times"></i></button></td>
          </tr>
          `
      });
  });

function limpiar() {
    document.getElementById("nombre").value = "";
    document.getElementById("apellidoP").value = "";
    document.getElementById("apellidoM").value = "";
    document.getElementById("numcel").value = "";
    document.getElementById("direccion").value = "";
    document.getElementById("empleo").value = "";
    document.getElementById("numempleo").value = "";
}