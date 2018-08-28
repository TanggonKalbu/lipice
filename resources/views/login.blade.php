<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<style>
* {
    padding : 0;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

body{
    background-color: #fbdee8;
    
}
h1{
    color:grey;
    text-align:center;
    letter-spacing: 3px; 
    word-spacing: 10px;

}
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}

.responsive {
    max-width: 100%;
    height: auto;
}

.kanan-atas{
    float:right;
}

.kiri-atas{
    float:left;
}


/* card login start */
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
/* card login end */
/**
 * Footer Styles
 */

.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 0.2rem;
  background-color: white;
  text-align: center;
}

.ex1{
    max-width:100%;
    margin:auto;
}

.disabled{
    background-color:#e4e8ec;
    color: black;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.grecaptcha-badge {
    opacity:0;
}
/* footer end */


</style>
</head>
<body>
<div>
    <div class="ex1">
        <img src="images/buah-kanan-atas.png" class="kanan-atas responsive" alt="">
        <img src="images/buah-kiri-atas.png" class="kiri-atas responsive" alt="">
    </div>

    
    <div class="limiter">
		<div class="container centered">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="" method="" >
					<span class="login100-form-title p-b-55">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan No Handphone Anda">
						<input class="input100" type="number" name="notelp" placeholder="No Hp" onkeyup="nohp()" id="input-hp">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-phone"></span>
						</span>
                    </div>
                    
                    <div class="container-login100-form-btn p-t-15 p-b-35">
						<button class="login100-form-btn disabled" style="pointer-events:none" type="button" id="btn-kirim-kode">
							Kirim Kode Verifikasi
						</button>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan kode Verifikasi">
						<input class="input100" type="text" name="pass" placeholder="Kode Verifikasi" id="input-kode">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                    </div>
                    
                    <div class="container-login100-form-btn p-t-15 p-b-40">
						<button class="login100-form-btn disabled" style="pointer-events:none" type="button" id="btn-login" onclick="myFunction() ">
							Login
						</button>
                    </div>
                    

					<!-- <div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->
					
					

					<!-- <div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Or login with
						</span>
					</div>

					<a href="#" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-10">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Not a member?
						</span>

						<a class="txt1 bo1 hov1" href="#">
							Sign up now							
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
   
    

        



    <!-- footer -->
    <div class="footer" style="z-index:-1;">
        <img src="images/buah-kiri-bawah.png" class="responsive" alt="" style="position:absolute; left:0px; bottom:0px; z-index:-1;">
        <img src="images/lipice.png" class="responsive" alt="" style=" margin-right:auto; margin-left:auto; display:block;">   
        <img src="images/buah-kanan-bawah.png" class="responsive " alt="" style="position:absolute; right:0px; bottom:0px; z-index:-1;" >  
    </div>   
</div>



<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="js/main.js"></script>
<script>
    var btnkirimkode = document.getElementById('btn-kirim-kode');
    var btnlogin = document.getElementById('btn-login');
    var inputhp = document.getElementById('input-hp');
    var inputkode = document.getElementById('input-kode');
    
    var nohp = function(){
        if(inputhp.value!=''){
            btnkirimkode.classList.remove("disabled");
            btnkirimkode.style.pointerEvents = '';
        }else{
            btnkirimkode.classList.add("disabled");
            btnkirimkode.style.pointerEvents = 'none';
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
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('btn-kirim-kode', {
    'size': 'invisible',
    'callback': function(response) {
        submit();
    }
    });
    recaptchaVerifier.render().then(function(widgetId) {
    window.recaptchaWidgetId = widgetId;
    });

    var submit = function(){
    var settings = {
    "async": true,
    "crossDomain": true,
    "url": 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/profile?key="'+inputhp.value+'"',
    "method": "GET",
    "headers": {
    "content-type": "application/json"
    },
    "processData": false,
    "data": ""
    }
    $.ajax(settings).done(function (response) {
        if(response.rows==''){
            window.alert('Nomor Tidak Terdaftar');
        }else {
            var telpv = "+62"+inputhp.value;
            var appVerifier = window.recaptchaVerifier;
            firebase
            .auth()
            .signInWithPhoneNumber(telpv, window.recaptchaVerifier) 
            .then(function(confirmationResult) {
                window.confirmationResult = confirmationResult;
                console.log("good");
                btnkirimkode.classList.add("disabled");
                btnkirimkode.style.pointerEvents = 'none';
                btnkirimkode.textContent = "Kirim Ulang Kode Verifikasi";        
                setTimeout(kirimulang, 5000);
                btnlogin.classList.remove("disabled");
                btnlogin.style.pointerEvents = '';
                function kirimulang(){
                    btnkirimkode.classList.remove("disabled");
                    btnkirimkode.style.pointerEvents = '';
                }

            })
            .catch(function (error) {
                    // Error; SMS not sent
                    console.error('Terjadi Kesalahan :', error);
                    window.alert('Error during signInWithPhoneNumber:\n\n'
                        + error.code + '\n\n');
                    btnkirimkode.textContent = "Kirim Ulang Kode Verifikasi";        
                    btnkirimkode.classList.remove("disabled");
            });
        }
    }); 
  }

  var myFunction = function() {
    window.confirmationResult.confirm(document.getElementById("input-kode").value)
    .then(function(result) {
        window.alert('Konfirmasi Kode Berhasil');
        console.log("success");
        window.location.href = "/profile/"+inputhp.value+"/edit";
    }, function(error) {
        window.alert('Terjadi Kesalahan :\n\n'
                + error.code + '\n\n' + error.message);
      console.log(error);
    });
  };
  </script>
</body>
</html>