<!DOCTYPE html>
<html lang="en">
<head>
  <title>Firebase Phone Number Auth</title>
</head>
<body>
  <form>
    <input type="text" id="verificationcode" value="enter verification">
    <input type="button" value="Submit" onclick="myFunction()">
  </form>
  <div id="recaptcha-container"></div>
  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <script type="text/javascript">
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyA9q1pskVgdzJbZ3Qki_0UuYM9L5bkQF7w",
    authDomain: "lipice-8a856.firebaseapp.com",
    databaseURL: "https://lipice-8a856.firebaseio.com",
    projectId: "lipice-8a856",
    storageBucket: "lipice-8a856.appspot.com",
    messagingSenderId: "894497846646"
  };
  firebase.initializeApp(config);
</script>
<script type="text/javascript">
  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
  firebase.auth().signInWithPhoneNumber("+62081945314191", window.recaptchaVerifier) 
  .then(function(confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log(confirmationResult);
  });
  var myFunction = function() {
    window.confirmationResult.confirm(document.getElementById("verificationcode").value)
    .then(function(result) {
      
    }, function(error) {
      console.log(error);
    });
  };
  </script>
</body>
</html>