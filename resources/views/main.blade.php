 <!DOCTYPE html>
<html lang="en">
<head>
  <title>LIPICE</title>
    <link rel="icon" href="images/callout-lipice.png">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
 <body>
<style>
/* reset */
* {
    padding : 0;
    margin : 0;
    font-family: 'Montserrat', sans-serif;
}
body{
    background-color: #fbdee8;
    
}

/* form */
.warn {
  color:white;
  border-radius:30px;
  float:right;
  background-color:#df930e;
}

.submit {
  color:white;
  border-radius:30px;
  float:right;
  background-color:#ea8a8a;
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
    color: grey;
    font-size: 1vw;
    font-family: arial;
    position: absolute;
    top: 600px;
    left: 580px;
    width: 40%;
}

.samping{
    padding-right:100px;
    padding-left: 100px;
}

.samping2{
    padding-right:15%;
    padding-left: 15%;
}

.samping3{
    padding-right:15%;
    padding-left: 35%;
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

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

.grecaptcha-badge {
    opacity:0;
}

/* footer start */
html {
  height: 100%;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  position: relative;
  margin: 0;
  padding-bottom: 6rem;
  min-height: 100%;
  font-family: "Helvetica Neue", Arial, sans-serif;
}
@media screen and (max-width: 1100px) {
  .medq {
    font-size: 17px;
    display:block;
  }
  .medqInput{
    font-size: 12px;
  }
}
@media screen and (max-width: 1000px) {
  .medq {
    font-size: 16px;
  }
}@media screen and (max-width: 900px) {
  .medq {
    font-size: 15px;
  }
 
}
@media screen and (max-width: 800px) {
  .medq {
    font-size: 12px;
  }
}

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

/* footer end */

@media (max-width: 480px) {
.samping2{
    padding-right:15%;
    padding-left: 15%;
    }
.a{
    float:right; margin-top:-400px; z-index:1;
    }
}
</style>

</head>

<body>
<!-- Save for Web Slices (summercamp (2).psd) -->
<div class="responsive">


	<!-- buah atas -->
    <img src="images/buah-kanan-atas.png" class="kanan-atas responsive" alt="">
    <img src="images/buah-kiri-atas.png" class="kiri-atas responsive" alt="">
    <br>
    <div style="margin-top:100px;">
    <img src="images/logo.png" class="kiri-atas responsive" alt="">
    <img src="images/balon.png" class="kanan-atas responsive" alt="">
    </div>

<!-- <div class="container-fluid">
<div class="row">
        <div class="samping3">
        <p style="text-align:center">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod eget nunc a cursus. Vestibulum quis ipsum est. Etiam mollis scelerisque suscipit. Sed eleifend neque metus. In lacus arcu, luctus et sagittis commodo, consequat eget nisi. Duis non ex semper, ultricies nisl nec, hendrerit mauris. Sed suscipit ut sapien in vehicula. Ut lacinia bibendum rhoncus. Nam augue augue, mollis sed tincidunt quis, pellentesque eget enim. Suspendisse eleifend eu lectus in vestibulum. Nulla efficitur, elit et convallis malesuada, est nunc malesuada nulla, cursus eleifend mauris nunc id sapien. Donec condimentum nunc eget tellus imperdiet, vitae lobortis dolor suscipit. Fusce mattis, nisl vitae porttitor interdum, justo est ultricies risus, nec fermentum urna est ac lectus. Praesent varius accumsan ante eget consectetur. Suspendisse velit justo, malesuada vitae vulputate id, tincidunt ut neque. Cras sed vehicula libero.
        </p>
    </div>
    </div></div> -->

        <!-- <h2 class="textatas"><b>LOREM IPSUM DOLOR SIT <br> 
        AMET, CONSECTETUR <br> 
        ADIPISINING ELIT. ED O <br> 
        EIUSMOD TEMPOR INCINDINTU</b></h2> -->
 

    <!-- Card -->
    <div class="samping">
        <div class="card">
        <div class="card-body">
        @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br>
        @endif
            <h2 class="card-title reg medq">REGISTER HERE</h2>
            <br>
            <h3 class="card-title medq">Calling all beauty enthusiast!</h3>
            <h3 class="card-title medq">Submission are available to anyone  and everyone with a passion</h3>
            <h3 class="card-title medq">for make-up artistry.</h3>
        <br>
            <label class="card-subtitle mb-2 text-muted  medq">REGISTRATION FIELDS :</label>
        <br><br>
        <form class="form-horizontal" method="post" action="{{url('kontestans')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="namaLengkap" class="col-sm-3 col-form-label medqInput"><p style="display:inline-block">NAMA LENGKAP  <b style="color:red;">*</b></p></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namaLengkap" name="nama" required onkeyup="capt()">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" name="email" class="col-sm-3 col-form-label medqInput"><p style="display:inline-block">EMAIL<b style="color:red;">*</b></p></label>
            <div class="col-sm-9">  
                <input type="email" class="form-control" name="email" id="email" required onkeyup="capt()">
            </div>
        </div>


        <div class="form-group row">
            <label for="ttl" class="col-sm-3 col-form-label medqInput"><p style="display:inline-block">TEMPAT TANGGAL LAHIR<b style="color:red;">*</b></p></label>
            <div class="form-group col-md-3">
                <input type="text" class="form-control medqInput" name="tempatlahir"  id="kota" placeholder="Kota" required onkeyup="capt()">
            </div>
            <div class="form-group col-md-2">
                <input type="number" min="1" max="31"  class="form-control medqInput" name="tgl"  id="tgl" placeholder="Tgl" required onkeyup="capt()">
            </div>
            <div class="form-group col-md-2">

            <select name="bln" id="bulan" class="form-control medqInput" required="required" placeholder="Bulan" style="border: 1px solid #ea8a8a;"> 
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
                        
            </div>
            <div class="form-group col-md-2">
                <input type="number" min="1990" max="2018" class="form-control medqInput" name="tahun" id="tahun" placeholder="Tahun" required onkeyup="capt()">
            </div>
        </div>

        <div class="form-group row">
            <label for="telp" class="col-sm-3 col-form-label medqInput"><p style="display:inline-block">NO TELEPON<b style="color:red;">*</b></p></label>
            <div class="col-sm-9">
                <input type="number" name="notelp" class="form-control" id="telp" required onkeyup="capt()">
            </div>
        </div>

        <div class="form-group row">
            <label for="ig" class="col-sm-3 col-form-label medqInput"><p style="display:inline-block">LINK AKUN INSTAGRAM<b style="color:red;">*</b></p></label>
            <div class="col-sm-9">
                <input type="text" name="linkig" class="form-control" id="ig" required onkeyup="capt()">
            </div>
        </div>

        <div class="form-group row">
            <label for="fb" class="col-sm-3 col-form-label medqInput"><p style="display:inline-block">LINK AKUN FACEBOOK</p></label>
            <div class="col-sm-9">
                <input type="text" name="linkfb" class="form-control" id="fb" onkeyup="capt()">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-3 medqInput" for="comment"><p style="display:inline-block;">ALASAN MENGIKUTI #LIPICE7DAYSCHALLENGE</p> </label>
            <div class="col-sm-9"> 
                <textarea class="form-group" name="alasan" rows="5" id="alasan" onkeyup="capt()"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-3 medqInput" for="comment">Kode Validasi Nomor Telepon <b style="color:red;">*</b></label>
            <div class="col-md-2"> 
                <input class="form-control" type="text" id="verificationcode" >
            </div>
            <div class="col-md-2"> 
                <button class="btn submit" type="button" id="button-kode" onclick="myFunction()" style="float:left; display:none">Submit Kode</button>
            </div>                    
        </div>

        <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-md-2">
                <button class="btn btn-info medqInput" type="button" id="button-kirim" style=" float:left; display:none ">Kirim Kode Verifikasi</button> 
            </div>
        </div>
        <br><br>
        <button type="submit" id="btnSubmit" class="btn warn btn-lg medqInput" disabled>Submit</button>           
        </form>

        </div>
        </div>
    </div>

    <br><br><br><br>
    <div class="samping2">
        <p style="text-align:center; font-size:20pt;" ><b>#LIPICE7DAYSCHALLENGE</b></p>
        <p style="text-align:center;font-size: 18pt;"><b>SUMMER CAMP TIMELINE</b></p>
        <br>
        <p style="text-align:center; font-size:15pt;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod eget nunc a cursus. Vestibulum quis ipsum est. Etiam mollis scelerisque suscipit. Sed eleifend neque metus. In lacus arcu, luctus et sagittis commodo, consequat eget nisi. Duis non ex semper, ultricies nisl nec, hendrerit mauris. Sed suscipit ut sapien in vehicula. Ut lacinia bibendum rhoncus. Nam augue augue, mollis sed tincidunt quis, pellentesque eget enim. Suspendisse eleifend eu lectus in vestibulum. Nulla efficitur, elit et convallis malesuada, est nunc malesuada nulla, cursus eleifend mauris nunc id sapien. Donec condimentum nunc eget tellus imperdiet, vitae lobortis dolor suscipit. Fusce mattis, nisl vitae porttitor interdum, justo est ultricies risus, nec fermentum urna est ac lectus. Praesent varius accumsan ante eget consectetur. Suspendisse velit justo, malesuada vitae vulputate id, tincidunt ut neque. Cras sed vehicula libero.
        </p>
    </div>
    <br><br><br>

    <!-- buah bawah -->
    <div class="inline-block">
        <table style="width:100%; z-index:-1;">
            <tr>
                <th class="col-xs|sm|md|lg|xl-4">
                    <img src="images/kiri.png" class="responsive" alt="" style="float:left;margin-bottom:-280px; z-index:-1;">
                </th>
                <th></th>
                <th class="col-xs|sm|md|lg|xl-4">
                    <img src="images/timeline.png" class="responsive" alt="" style="display:block; margin:0 auto; z-index:-1;">
                </th>
                <th class="col-xs|sm|md|lg|xl-4">
                    <div style="width:100%">
                    <img src="images/kanan.png" class="responsive a" alt="" style="">
                    </div>
                </th>
            </tr>
        </table>      
    </div>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-xs|sm|md|lg|xl-4">
                <img src="images/kiri.png" class="responsive" alt="" style="float:left; z-index:-1;">
            </div>
            <div class="col-xs|sm|md|lg|xl-4" style="align:center; width:auto">
                <img src="images/timeline.png" class="responsive" alt="" style="display:block; margin:auto;z-index:-1;">
            </div>
            <div class="col-xs|sm|md|lg|xl-4">
                <img src="images/kanan.png" class="responsive" alt="" style="float:right; z-index:-1;">
            </div>
        </div>
    </div> -->
    <br><br><br><br><br>

    
    <!-- footer -->
    <div class="footer" style="z-index:-1;">
        <img src="images/buah-kiri-bawah.png" class="responsive" alt="" style="position:absolute; left:0px; bottom:0px; z-index:-1;">
        <img src="images/lipice.png" class="responsive" alt="" style=" margin:0 auto;">   
        <img src="images/buah-kanan-bawah.png" class="responsive " alt="" style="position:absolute; right:0px; bottom:0px; z-index:-1;" >  
    </div>    

</div>
<!-- End Save for Web Slices -->



<!-- ==========SCRIPT========== -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
        var nama = document.getElementById("namaLengkap");
        var email = document.getElementById("email");
        var kota = document.getElementById("kota");
        var tgl = document.getElementById("tgl");
        var tahun = document.getElementById("tahun");
        var telp = document.getElementById("telp");
        var ig = document.getElementById("ig");
        var fb = document.getElementById("fb");
        var alasan = document.getElementById("alasan");
        var buttons = document.getElementById("btnSubmit");
        var buttonkode = document.getElementById("button-submit-kode");

    function capt() {
        if(nama.value!='' && email.value!='' && kota.value!='' && tgl.value!='' && tahun.value!='' && telp.value!='' && ig.value!='' && fb.value!=''&& alasan.value!=''){
            document.getElementById("button-kirim").style.display = '';
        }else{
            buttons.disabled= true;
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
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('button-kirim', {
    'size': 'invisible',
    'callback': function(response) {
        submit();
    }
    });
    recaptchaVerifier.render().then(function(widgetId) {
    window.recaptchaWidgetId = widgetId;

    });

  var submit = function(){
    var telpv = "+62"+telp.value;
    var appVerifier = window.recaptchaVerifier;
    firebase
    .auth()
    .signInWithPhoneNumber(telpv, window.recaptchaVerifier) 
    .then(function(confirmationResult) {
        window.confirmationResult = confirmationResult;
        console.log("good");
        document.getElementById("button-kirim").disabled = true;
        document.getElementById("button-kirim").textContent = "Kirim Ulang Kode Verifikasi";        
        setTimeout(kirimulang, 5000);
        buttonkode.style.display = '';
        function kirimulang(){
            document.getElementById("button-kirim").disabled = false;
        }

    })
    .catch(function (error) {
            // Error; SMS not sent
            console.error('Terjadi Kesalahan :', error);
            window.alert('Error during signInWithPhoneNumber:\n\n'
                + error.code + '\n\n');
            document.getElementById("button-kirim").textContent = "Kirim Ulang Kode Verifikasi";        
            function kirimulang(){
                document.getElementById("button-kirim").disabled = false;
            }
        });
  }

  var myFunction = function() {
    window.confirmationResult.confirm(document.getElementById("verificationcode").value)
    .then(function(result) {
        window.alert('Konfirmasi Kode Berhasil');
        console.log("success");
        buttons.disabled = false;
    }, function(error) {
        window.alert('Terjadi Kesalahan :\n\n'
                + error.code + '\n\n' + error.message);
            window.signingIn = false;
      console.log(error);
    });
  };
  </script>
</body>
</html>