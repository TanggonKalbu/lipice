<!DOCTYPE html>
<!--
Copyright (c) 2016 Google Inc.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html>
<head>
  <meta charset=utf-8 />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phone Authentication with invisible ReCaptcha</title>

  <!-- Material Design Theming -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
 

    
</head>
<body>
<div>
<video width="320" height="240" controls loop autoplay>
  <source src="http://159.65.139.254:5984/lipice/869999ee44c2ef3202a6fa489504156d/profile.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>

<!-- Import and configure the Firebase SDK -->
<!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
<!-- If you do not serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->


<script type="text/javascript">
  /**
   * Set up UI event listeners and registering Firebase auth listeners.
   */
  window.onload = function() {
    // Listening for auth state changes.
    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        // User is signed in.
        var uid = user.uid;
        var email = user.email;
        var photoURL = user.photoURL;
        var phoneNumber = user.phoneNumber;
        var isAnonymous = user.isAnonymous;
        var displayName = user.displayName;
        var providerData = user.providerData;
        var emailVerified = user.emailVerified;
      }
      updateSignInButtonUI();
      updateSignInFormUI();
      updateSignOutButtonUI();
      updateSignedInUserStatusUI();
      updateVerificationCodeFormUI();
    });
    // Event bindings.
    document.getElementById('sign-out-button').addEventListener('click', onSignOutClick);
    document.getElementById('phone-number').addEventListener('keyup', updateSignInButtonUI);
    document.getElementById('phone-number').addEventListener('change', updateSignInButtonUI);
    document.getElementById('verification-code').addEventListener('keyup', updateVerifyCodeButtonUI);
    document.getElementById('verification-code').addEventListener('change', updateVerifyCodeButtonUI);
    document.getElementById('verification-code-form').addEventListener('submit', onVerifyCodeSubmit);
    document.getElementById('cancel-verify-code-button').addEventListener('click', cancelVerification);
    // [START appVerifier]
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button', {
      'size': 'invisible',
      'callback': function(response) {
        // reCAPTCHA solved, allow signInWithPhoneNumber.
        onSignInSubmit();
      }
    });
    // [END appVerifier]
    recaptchaVerifier.render().then(function(widgetId) {
      window.recaptchaWidgetId = widgetId;
      updateSignInButtonUI();
    });
  };
  /**
   * Function called when clicking the Login/Logout button.
   */
  function onSignInSubmit() {
    if (isPhoneNumberValid()) {
      window.signingIn = true;
      updateSignInButtonUI();
      var phoneNumber = getPhoneNumberFromUserInput();
      var appVerifier = window.recaptchaVerifier;
      firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
          .then(function (confirmationResult) {
            // SMS sent. Prompt user to type the code from the message, then sign the
            // user in with confirmationResult.confirm(code).
            window.confirmationResult = confirmationResult;
            window.signingIn = false;
            updateSignInButtonUI();
            updateVerificationCodeFormUI();
            updateVerifyCodeButtonUI();
            updateSignInFormUI();
          }).catch(function (error) {
            // Error; SMS not sent
            console.error('Error during signInWithPhoneNumber', error);
            window.alert('Error during signInWithPhoneNumber:\n\n'
                + error.code + '\n\n' + error.message);
            window.signingIn = false;
            updateSignInFormUI();
            updateSignInButtonUI();
          });
    }
  }
  /**
   * Function called when clicking the "Verify Code" button.
   */
  function onVerifyCodeSubmit(e) {
    e.preventDefault();
    if (!!getCodeFromUserInput()) {
      window.verifyingCode = true;
      updateVerifyCodeButtonUI();
      var code = getCodeFromUserInput();
      confirmationResult.confirm(code).then(function (result) {
        // User signed in successfully.
        var user = result.user;
        window.verifyingCode = false;
        window.confirmationResult = null;
        updateVerificationCodeFormUI();
      }).catch(function (error) {
        // User couldn't sign in (bad verification code?)
        console.error('Error while checking the verification code', error);
        window.alert('Error while checking the verification code:\n\n'
            + error.code + '\n\n' + error.message);
        window.verifyingCode = false;
        updateSignInButtonUI();
        updateVerifyCodeButtonUI();
      });
    }
  }
  /**
   * Cancels the verification code input.
   */
  function cancelVerification(e) {
    e.preventDefault();
    window.confirmationResult = null;
    updateVerificationCodeFormUI();
    updateSignInFormUI();
  }
  /**
   * Signs out the user when the sign-out button is clicked.
   */
  function onSignOutClick() {
    firebase.auth().signOut();
  }
  /**
   * Reads the verification code from the user input.
   */
  function getCodeFromUserInput() {
    return document.getElementById('verification-code').value;
  }
  /**
   * Reads the phone number from the user input.
   */
  function getPhoneNumberFromUserInput() {
    return document.getElementById('phone-number').value;
  }
  /**
   * Returns true if the phone number is valid.
   */
  function isPhoneNumberValid() {
    var pattern = /^\+[0-9\s\-\(\)]+$/;
    var phoneNumber = getPhoneNumberFromUserInput();
    return phoneNumber.search(pattern) !== -1;
  }
  /**
   * Re-initializes the ReCaptacha widget.
   */
  function resetReCaptcha() {
    if (typeof grecaptcha !== 'undefined'
        && typeof window.recaptchaWidgetId !== 'undefined') {
      grecaptcha.reset(window.recaptchaWidgetId);
    }
  }
  /**
   * Updates the Sign-in button state depending on ReCAptcha and form values state.
   */
  function updateSignInButtonUI() {
    document.getElementById('sign-in-button').disabled = !isPhoneNumberValid() || !!window.signingIn;
  }
  /**
   * Updates the Verify-code button state depending on form values state.
   */
  function updateVerifyCodeButtonUI() {
    document.getElementById('verify-code-button').disabled =
        !!window.verifyingCode
        || !getCodeFromUserInput();
  }
  /**
   * Updates the state of the Sign-in form.
   */
  function updateSignInFormUI() {
    if (firebase.auth().currentUser || window.confirmationResult) {
      document.getElementById('sign-in-form').style.display = 'none';
    } else {
      resetReCaptcha();
      document.getElementById('sign-in-form').style.display = 'block';
    }
  }
  /**
   * Updates the state of the Verify code form.
   */
  function updateVerificationCodeFormUI() {
    if (!firebase.auth().currentUser && window.confirmationResult) {
      document.getElementById('verification-code-form').style.display = 'block';
    } else {
      document.getElementById('verification-code-form').style.display = 'none';
    }
  }
  /**
   * Updates the state of the Sign out button.
   */
  function updateSignOutButtonUI() {
    if (firebase.auth().currentUser) {
      document.getElementById('sign-out-button').style.display = 'block';
    } else {
      document.getElementById('sign-out-button').style.display = 'none';
    }
  }
  /**
   * Updates the Signed in user status panel.
   */
  function updateSignedInUserStatusUI() {
    var user = firebase.auth().currentUser;
    if (user) {
      document.getElementById('sign-in-status').textContent = 'Signed in';
      document.getElementById('account-details').textContent = JSON.stringify(user, null, '  ');
    } else {
      document.getElementById('sign-in-status').textContent = 'Signed out';
      document.getElementById('account-details').textContent = 'null';
    }
  }
</script>

    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script type="text/javascript">
  
  

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
</body>
</html>