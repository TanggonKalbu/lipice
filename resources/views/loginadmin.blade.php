<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <link rel="icon" href="/images/callout-lipice.png">
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

.container{
    padding-right:100px;
    padding-left: 100px;
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
    margin-right:10px;
    margin-left:10px;
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

@media screen and (max-width: 800px) {

.responsive {
    width: 15%;
    height: auto;
}

}

</style>
</head>
<body>
<div>
    <div class="ex1">
        <img src="images/buah-kanan-atas.png" class="kanan-atas responsive" alt="">
        <img src="images/buah-kiri-atas.png" class="kiri-atas responsive" alt="">
    </div>

    
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="" method="" >
					<span class="login100-form-title p-b-55">
						Login Admin
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" id="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					
					<div class="container-login100-form-btn p-t-25 p-b-40">
						<button type="button" class="login100-form-btn" id="btn-login" onclick=loginadmin()>
							Login
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
   
    

        



    <!-- footer -->
    <div class="footer" style="z-index:-1; padding-bottom:15px">
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
    var btnlogin = document.getElementById('btn-login');
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var a = 1; var b = 2;
    // var kunci = username.value+password.value;
    var kunci = username.value + password.value;
</script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
<script>
var loginadmin = function(){    
    var settings = {
    "async": true,
    "crossDomain": true,
    "url": 'http://159.65.139.254:5984/lipice/_design/view/_view/admin?key=["'+username.value+'","'+password.value+'"]',
    "method": "GET",
    "headers": {}
    }
    $.ajax(settings).done(function (response) {
        if(response["rows"].length==0){
            window.alert('Username atau Password Salah!');        
        }else if(response["rows"].length>0){
            window.location.href = "/admin";        
        }
        

    });
}
</script>
</body>
</html>