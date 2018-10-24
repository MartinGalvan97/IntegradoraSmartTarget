firebase.initializeApp({
  apiKey: 'AIzaSyAX3n2yCsX_NLmknMzbHscRqQAiWPF6NfA',
  authDomain: 'smarttarjet-1e067.firebaseapp.com',
  projectId: 'smarttarjet-1e067'
});

// Initialize Cloud Firestore through Firebase
/*var db = firebase.firestore();

db.collection("users").add({
    first: "Ada",
    last: "Lovelace",
    born: 1815
})
.then(function(docRef) {
    console.log("Document written with ID: ", docRef.id);
})
.catch(function(error) {
    console.error("Error adding document: ", error);
});*/

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
observador();

function cerrar() {
	firebase.auth().signOut()
	.then(function(){
		console.log("Saliendo...")
	})
	.catch(function(error){
		console.log(error)
	})
}

function verificar(){
	var user = firebase.auth().currentUser;

user.sendEmailVerification().then(function() {
  // Email sent.
  console.log("Enviando correo")
}).catch(function(error) {
  // An error happened.
});
}