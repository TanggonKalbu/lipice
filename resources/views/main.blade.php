<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Firebase Phone Number Auth</title>
</head>
<body>
  <form>
    <input type="text" id="verificationcode" >
    <input type="button" id="submit" value="Submit" onclick="myFunction()" disabled>
  </form>
  <div id="recaptcha-container"></div>
  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <script type="text/javascript">
  
  document.getElementById("verificationcode").addEventListener("keyup", function() {
    var nameInput = document.getElementById('verificationcode').value;
    if (nameInput != '') {
        document.getElementById('submit').removeAttribute("disabled");
    } else {
        document.getElementById('submit').setAttribute("disabled", null);
    }
});

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
  firebase.auth().signInWithPhoneNumber("+6281359868716", window.recaptchaVerifier) 
  .then(function(confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log(confirmationResult);
  });
  var myFunction = function() {
    window.confirmationResult.confirm(document.getElementById("verificationcode").value)
    .then(function(result) {
      console.log("bayuganteng");
    }, function(error) {
      console.log(error);
    });
  };
  </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lipice</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lipice</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>
/* reset */
* {
    padding : 0;
    margin : 0;
}
body{
    background-color: #fbdee8;
}

/* form */
    .warn {
      color:white;
      border-radius:30px;
      float:right;

    }
    .reg{
      color:#6EBEE0;
      font-size: 2vw;
    }
    .card{
      padding:40px;
    }

    input[type=text], select {
        border: 1px solid #ea8a8a;
    }

    input[type=number], select {
        border: 1px solid #ea8a8a;
    }

    input[type=email], select {
        border: 1px solid #ea8a8a;
    }

    textarea {
        border: 1px solid #ea8a8a;
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border-radius: 6px;
        background-color: white;
        font-size: 16px;
        resize: none;
    }
/* end form */

/* gambar */
        #Table_01 {
            position:absolute;
            left:0px;
            top:0px;
            align : center;
            width:1366px;
            height:3100px;
        }

        #summercamp--2--01 {
            position:absolute;
            left:0px;
            top:0px;
            width:631px;
            height:84px;
        }

        #logo-girl {
            position:absolute;
            left:631px;
            top:0px;
            width:735px;
            height:820px;
        }

        #summercamp--2--03 {
            position:absolute;
            left:0px;
            top:84px;
            width:86px;
            height:1383px;
        }

        #icon {
            position:absolute;
            left:86px;
            top:84px;
            width:545px;
            height:454px;
        }

        #summercamp--2--05 {
            position:absolute;
            left:86px;
            top:538px;
            width:545px;
            height:282px;
        }

        #card {
            position:absolute;
            left:86px;
            top:820px;
            width:1182px;
            height:647px;
        }

        #summercamp--2--07 {
            position:absolute;
            left:1268px;
            top:820px;
            width:98px;
            height:647px;
        }

        #girl-kiri {
            position:absolute;
            left:0px;
            top:1467px;
            width:245px;
            height:784px;
        }

        #summercamp--2--09 {
            position:absolute;
            left:245px;
            top:1467px;
            width:935px;
            height:141px;
        }

        #girl-kanan {
            position:absolute;
            left:1180px;
            top:1467px;
            width:186px;
            height:99px;
        }

        #girl-kanan-1 {
            position:absolute;
            left:1180px;
            top:1566px;
            width:186px;
            height:801px;
        }

        #timeline {
            position:absolute;
            left:245px;
            top:1608px;
            width:935px;
            height:1299px;
        }

        #girl-kiri-1 {
            position:absolute;
            left:0px;
            top:2251px;
            width:245px;
            height:540px;
        }

        #girl-kanan014 {
            position:absolute;
            left:1180px;
            top:2367px;
            width:186px;
            height:540px;
        }

        #girl-kiri015 {
            position:absolute;
            left:0px;
            top:2791px;
            width:245px;
            height:116px;
        }

        #footer {
            position:absolute;
            left:0px;
            top:2907px;
            width:1366px;
            height:193px;
        }
        #buah{
            float:right;
        }

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
.kiri-logo{
    width:545px; 
    height:454px; 
    float:left;
    margin-top:-140px;
    padding-left:150px;
}
.kanan-ballon{
    margin-top:-190px;
    width:735px; 
    height:820px; 
    float:right;
}
.card {
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    background-color:white;
    align:center;
    padding-right:30%;
    padding-left: 10%;
}

.card:hover {
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
}

.container {
    padding: 140px 85px;
}

.textatas{
    position : absolute;
    color: grey;
    font-size: 1vw;
    font-family: arial;
    top: 380px;
    left : 450px;

}

.samping{
    padding-right:100px;
    padding-left: 100px;
}

/* end gambar */
</style>

</head>

<body>
<!-- Save for Web Slices (summercamp (2).psd) -->
<div>


	<!-- buah atas -->
<<<<<<< HEAD
         
=======
            <!-- <img src="images/buah_kiri_atas.png" style="width:121px; height:221px; float:left;" alt="">
            <img src="images/buah_kanan_atas.png" style="width:109px; height:128px; float:right;" alt=""> -->

>>>>>>> 5dc91f5c3a656e9f4b89f7374d06a838f8aeda98

    <!-- header -->
     <!-- <div class="row">
        <div class="column">
            <img src="images/Untitled-6.png" alt="" class="kiri-logo">
        </div>
        <div class="column">
            <img src="images/Untitled-7.png" alt="" class="kanan-ballon">
        </div>
    </div> -->


        <h2 class="textatas"><b>LOREM IPSUM DOLOR SIT <br> 
        AMET, CONSECTETUR <br> 
        ADIPISINING ELIT. ED O <br> 
        EIUSMOD TEMPOR INCINDINTU</b></h2>
 

   


    <!-- Card -->
    <div class="samping">
        <div class="card">
        <div class="card-body">
            <h2 class="card-title reg">REGISTER HERE</h2>
            <br>
            <h3 class="card-title">Calling all beauty enthusiast!</h3>
            <h3 class="card-title">Submission are available to anyone  and everyone with a passion</h3>
            <h3 class="card-title">for make-up artistry.</h3>
        <br>
            <label class="card-subtitle mb-2 text-muted">REGISTRATION FIELDS :</label>
        <br><br>
        <form class="form-horizontal" method="post" action="{{url('kontestans')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="namaLengkap" class="col-sm-3 col-form-label">NAMA LENGKAP <b style="color:red;">*</b></label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="namaLengkap" name="nama" >
            </div>
        </div>

        <div class="form-group row">
            <label for="namaLengkap" name="email" class="col-sm-3 col-form-label">EMAIL <b style="color:red;">*</b></label>
            <div class="col-sm-9">
            <input type="email" class="form-control" name="email" id="email" >
            </div>
        </div>


        <div class="form-group row">
        <label for="ttl" class="col-sm-3 col-form-label">TEMPAT TANGGAL LAHIR <b style="color:red;">*</b></label>
            <div class="form-group col-md-2">
            <input type="text" class="form-control" name="tempatlahir"  id="kota" placeholder="Kota" >
            </div>
            <div class="form-group col-md-1">
            <input type="number" class="form-control" name="tgl"  id="tgl" placeholder="Tgl" >
            </div>
            <div class="form-group col-md-2">
            <input type="text" class="form-control" name="bln" id="bln" placeholder="Bulan" >
            </div>
            <div class="form-group col-md-2">
            <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Tahun" >
            </div>
        </div>

        <div class="form-group row">
            <label for="telp" class="col-sm-3 col-form-label">NO TELEPON <b style="color:red;">*</b></label>
            <div class="col-sm-9">
<<<<<<< HEAD
            <input type="number" name="notelp" class="form-control" id="telp" >
=======
            <input type="text" class="form-control" id="telp" required>
>>>>>>> 5dc91f5c3a656e9f4b89f7374d06a838f8aeda98
            </div>
        </div>

        <div class="form-group row">
            <label for="ig" class="col-sm-3 col-form-label">LINK AKUN INSTAGRAM <b style="color:red;">*</b></label>
            <div class="col-sm-9">
            <input type="text" name="linkig" class="form-control" id="ig" >
            </div>
        </div>

        <div class="form-group row">
            <label for="fb" class="col-sm-3 col-form-label">LINK AKUN FACEBOOK (OPTIONAL) <b style="color:red;">*</b></label>
            <div class="col-sm-9">
            <input type="text" name="linkfb" class="form-control" id="fb" >
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-3" for="comment">ALASAN MENGIKUTI #LIPICE7DAYSCHALLENGE <b style="color:red;">*</b></label>
            <div class="col-sm-9"> 
            <textarea class="form-group" name="alasan" rows="5" id="comment" ></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-warning warn btn-lg">Submit</button>
        
        </form>

        </div>
        </div>
    </div>

</div>
<!-- End Save for Web Slices -->


<!-- buah atas -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>