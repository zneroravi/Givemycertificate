// Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAcnC0SbPvd-7F0zoxJzbRBMGg7aWaY908",
    authDomain: "give-my-certificate-form.firebaseapp.com",
    databaseURL: "https://give-my-certificate-form.firebaseio.com",
    projectId: "give-my-certificate-form",
    storageBucket: "give-my-certificate-form.appspot.com",
    messagingSenderId: "1026962259952",
    appId: "1:1026962259952:web:84cf083350fc1d794e6735",
    measurementId: "G-5HXP5RGN87"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm); 

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var email = getInputVal('email');
  var message = getInputVal('message');

  // Save message
  saveMessage(name, email, message);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, email, message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    email:email,
    message:message
  });
}