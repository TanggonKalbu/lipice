<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lipice Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- datatable -->
  
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <a class="navbar-brand" href="#">Lipice</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{URL('admin')}}">Kontestan</a></li>
      <li><a href="{{URL('adminchallenge')}}">Challenge</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Approval
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a onclick="location.href='/adminapproval/day1/edit'">Day 1</a></li>
          <li><a onclick="location.href='/adminapproval/day2/edit'">Day 2</a></li>
          <li><a onclick="location.href='/adminapproval/day3/edit'">Day 3</a></li>
          <li><a onclick="location.href='/adminapproval/day4/edit'">Day 4</a></li>
          <li><a onclick="location.href='/adminapproval/day5/edit'">Day 5</a></li>
          <li><a onclick="location.href='/adminapproval/day6/edit'">Day 6</a></li>
          <li><a onclick="location.href='/adminapproval/day7/edit'">Day 7</a></li>
        </ul>
      </li>
     <li><a href="{{URL('adminbanner')}}">Banner</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-user"></span> Change Password</a></li>
      <li><a href="votesession_controller/delete_admin"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="" method="" >
					<span class="login100-form-title p-b-55">
						Change Password
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Old Password">
						<input class="input100" type="password" name="oldpassword" placeholder="Old Password" id="oldpassword">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Confirm Password is required">
						<input class="input100" type="password" name="confirmpassword" placeholder="Confirm Password" id="confirmpassword" onkeyup="conf()">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
                    <span class="fa fa-times-circle" style="color:red; display:none" id="icon-nonaktif"> Password Doesn't Match</span>


					
					<div class="container-login100-form-btn p-t-25 p-b-40">
						<button type="button" class="login100-form-btn" id="btn-save" onclick=save() style="pointer-events:none">
							Save
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
    </div>
</div>

<?php //print_r($data["kontestan"]);?>
<?php //var_dump($data["kontestan"]);?>
<style>
.navbar-inverse {
    background-color: #d33f8d;
    border: none;
    color: white;
}
.navbar-inverse .navbar-nav>li>a {
    color: #ffffff;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #a20d5c;
    border: none;
}
.navbar-inverse .navbar-brand {
    color: white;
}
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
</style>


<script>
    var oldpass = document.getElementById("oldpassword");
    var pass = document.getElementById("password");
    var confpass = document.getElementById("confirmpassword");
    var xicon = document.getElementById('icon-nonaktif');
    var btnsave = document.getElementById('btn-save');
    var username = '<?php echo session("admin"); ?>';
    var conf = function(){
        if(pass.value!=confpass.value){
            xicon.style.display = '';
        }else if (pass.value==confpass.value){
            xicon.style.display = 'none';
            btnsave.style.pointerEvents = 'auto';
            console.log(pass.value);
            console.log(confpass.value);
            
            
        }
    }
    var save = function(){
        var settings = {
         "async": true,
        "crossDomain": true,
        "url": 'http://159.65.139.254:5984/lipice/_design/view/_view/admin?key=["'+username+'","'+oldpass.value+'"]',
        "method": "GET",
        "headers": {
        "content-type": "application/json"
        },
        "processData": false,
        "data": ""
        }
        $.ajax(settings).done(function (response) {
            if(response.rows == 0){
                window.alert('Password Lama Salah');
            }else{
                
            var id = response.rows[0].value._id;
            var rev = response.rows[0].value._rev;
            var settings = {
            "async": true,
            "crossDomain": true,
            "url": 'http://159.65.139.254:5984/lipice/'+id+'?rev='+rev+'',
            "method": "PUT",
            "headers": {
            "content-type": "application/json"
             },
            "processData": false,
            "data": '{\n  \"_id\": \"'+id+' \",\n  \"_rev\": \"'+rev+'\",\n  \"type\": \"admin\",\n  \"username\": \"'+username+'\",\n  \"password\": \"'+confpass.value+'\"\n}'
        }
            $.ajax(settings).done(function (response) {
                
                 window.alert('Berhasil Ganti Password');
                window.location.href = '/admin';
                
            });     
            }
        });
    }
</script>
</body>
</html>