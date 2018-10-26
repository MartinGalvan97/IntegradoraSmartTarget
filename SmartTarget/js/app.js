//INICIALIZACION DE FIREBASE
  firebase.initializeApp({
    apiKey: 'AIzaSyAX3n2yCsX_NLmknMzbHscRqQAiWPF6NfA',
    authDomain: 'smarttarjet-1e067.firebaseapp.com',
    projectId: 'smarttarjet-1e067'
  });

  // Initialize Cloud Firestore through Firebase
  var db = firebase.firestore();

  function guardar(){
    // Variables pasadas de html a javascript
    var nombre = document.getElementById('nombre').value;
    var apellidoP = document.getElementById('apellidoP').value;
    var apellidoM = document.getElementById('apellidoM').value;
    var email = document.getElementById('email').value;
    var contrasena = document.getElementById('password').value;

    db.collection("users").add({//se crea la tabla de usuarios
      Nombre: nombre,
      ApellidoP: apellidoP,
      ApellidoM: apellidoM,
      Email: email,
      Contrasena: contrasena
  })
  .then(function(docRef) {
      console.log("Document written with ID: ", docRef.id);
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
  });
  };

//CRUD DE USUARIOS
//
//INGRESAR
  function guardar(){
    // Variables pasadas de html a javascript
    var nombre = document.getElementById('nombre').value;
    var apellidoP = document.getElementById('apellidoP').value;
    var apellidoM = document.getElementById('apellidoM').value;
    var email = document.getElementById('email').value;
    var contrasena = document.getElementById('password').value;

    db.collection("users").add({//se crea la tabla de usuarios
      Nombre: nombre,
 



      ApellidoP: apellidoP,
      ApellidoM: apellidoM,
      Email: email,
      Contrasena: contrasena
    })
    .then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
  };

//MODIFICAR
  function editar(id,ApellidoP, ApellidoM, Email, Nombre){
    document.getElementById('apellidoP').value = ApellidoP;
    document.getElementById('apellidoM').value = ApellidoM;
    document.getElementById('email').value = Email;
    document.getElementById('nombre').value = Nombre;
    var boton = document.getElementById('boton');
    boton.innerHTML = 'Editar';

    boton.onclick = function(){
      var washingtonRef = db.collection("users").doc(id);
      // Set the "capital" field of the city 'DC'
      // 
      var nombre = document.getElementById('nombre').value;
      var apellidoP = document.getElementById('apellidoP').value;
      var apellidoM = document.getElementById('apellidoM').value;
      var email = document.getElementById('email').value;

      return washingtonRef.update({
          Nombre: nombre,
          ApellidoP: apellidoP,
          ApellidoM: apellidoM,
          Email: email,
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
  function eliminar(id) {
    db.collection("users").doc(id).delete().then(function() {
      console.log("Document successfully deleted!");
  }).catch(function(error) {
      console.error("Error removing document: ", error);
  });
  }

//LEER
  var tablamaestros = document.getElementById('tablamaestros');
  db.collection("users").onSnapshot((querySnapshot) => {
    tablamaestros.innerHTML = '';
        querySnapshot.forEach((doc) => {
          console.log(`${doc.id} => ${doc.data()}`);
          tablamaestros.innerHTML +=`
          <tr>
            <td>${doc.id}</td>
            <td>${doc.data().ApellidoP}</td>
            <td>${doc.data().ApellidoM}</td>
            <td>${doc.data().Email}</td>
            <td>${doc.data().Nombre}</td>
            <td><button class="btn btn-danger" onclick="eliminar('${doc.id}')">Eliminar</button></td>
            <td><button class="btn btn-warning" onclick="editar('${doc.id}','${doc.data().ApellidoP}','${doc.data().ApellidoM}','${doc.data().Email}', '${doc.data().Nombre}')">Editar</button></td>
          </tr>
          `
      });
  });

/////////////////////////////////////////////////////////////


//AUTENTIFICACION DE CORREO Y USUARIO
//
//REGISTRO
  function registrar(){
  	var email = document.getElementById('email').value;
  	var contrasena = document.getElementById('contrasena').value;

  	firebase.auth().createUserWithEmailAndPassword(email, contrasena)
  	.then(function(){
  		verificar()
  	})
  	.catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    // ...
  });
  }

//VALIDAR EL LOGIN
  function ingresar(){
  	var email1 = document.getElementById('email').value;
  	var contrasena1 = document.getElementById('contrasena').value;

  	firebase.auth().signInWithEmailAndPassword(email1, contrasena1)
  	.catch(function(error) {
  	  // Handle Errors here.
  	  var errorCode = error.code;
  	  var errorMessage = error.message;
  	  // ...
  	});
  }

//MONITOREAR SI ESTA INICIDO SESION O NO
  function observador(){
  	firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
    	console.log("existe usuario")
      // User is signed in.
      var displayName = user.displayName;
      var email = user.email;
      var emailVerified = user.emailVerified;
      var photoURL = user.photoURL;
      var isAnonymous = user.isAnonymous;
      var uid = user.uid;
      var providerData = user.providerData;
      // ...
    } else {
    	console.log("no existe usuario")
      // User is signed out.
      // ...
    }
  });
  }

observador();//SE EJECUTA SIEMPRE

//CERRAR SESION
  function cerrar() {
  	firebase.auth().signOut()
  	.then(function(){
  		console.log("Saliendo...")
  	})
  	.catch(function(error){
  		console.log(error)
  	})
  }
//ENVIAR CORREO DE VERIFICACION
  function verificar(){
  	var user = firebase.auth().currentUser;

  user.sendEmailVerification().then(function() {
    // Email sent.
    console.log("Enviando correo")
  }).catch(function(error) {
    // An error happened.
  });
  }