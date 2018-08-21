<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<style>
* {
    padding : 0;
    margin : 0;
}
body{
    background-color: #fbdee8;
    padding-right: 5%;
    padding-left: 5%;
    padding-top: 10%;
}

/* scrollbar start */
.scrollbar {
    float: left;
    height: 500px;
    width: 100%;
    background: #fff;
  
    overflow:auto;
    margin-bottom: 25px;
}
.force-overflow {
    max-width: 99%;
}

.scrollbar-primary::-webkit-scrollbar {
  width: 15px;
  border-radius: 15px;
  background-color: #eee; }

.scrollbar-primary::-webkit-scrollbar-thumb {
  border-radius: 15px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #f8c128;  }

/* scrollbar end */

.card{
    border-style: none;
}

.content{
    padding-left:50px;
    padding-right: 50px;
    padding-top: 50px;
}
.card-title{
    text-align:center;
}

.card-body{
    text-align:center;
}

.rounded-circle{
    height: 30%;
    width: 30%;
    border: 2px;
    margin-top:30px;
    border-color: red;
}

.button {
    background-color: #8bc3d9;
    border: none;
    color: white;
    padding: 6px 80px;    
    
    height:auto;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
}

.btn-content {
    background-color: #8bc3d9;
    border: none;
    color: white;
    padding: 12px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: none;
    border-radius: 0;       
    background-color: #eeeeee;
    font-size: 16px;
    resize: none;
}

.inpt {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color: pink;
    border: none;
    border-radius: 0;  
}

input::placeholder {
  font-style:italic;
}

textarea::placeholder{
    font-style:italic;
}

.rounded{
    margin-right:5px;
    margin-left: 5px;
}

.btn{
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: none;
    border-radius: 0px;  
    border-color:#eeeeee;
    background-color:#eeeeee;
    
}
.inpp{
    border-top-style: solid;
    border-right-style: none;
    border-bottom-style: solid;
    border-left-style: solid;
    border-radius: 0px;
    border-color: #eeeeee; 
}

.dd{
    background-color:white;
    color: black;
    border-color: #eeeeee; 
}

/* image modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

/* image modal end */



</style>
</head>
<body>

<!-- card -->
    <div>
        <div class="row">
        <!-- profile -->
            <div class="col-sm-3">
                <div class="card">
                <div class="card-body">
                    <img src="/images/lipice_icon.png" alt="..." class="rounded-circle">  
                    <br><br>
                    <h5 class="card-title">Putri Clarisa  &nbsp;&nbsp;
                        <a href="google.com"><i class="fas fa-pen"></i> </a> 
                    </h5>

                    <form action="" method="post">
                        <div class="btn-group mb-3">
                        <select name="provinsi" class="form-control" data-width="10%"> 
                            <option>Provinsi</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Kepulaian Riau">Kepulaian Riau</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Banten">Banten</option>
                            <option value="Bali">Bali</option>
                            <option value="NTB">NTB</option>
                            <option value="NTT">NTT</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sukawesi Barat">Sukawesi Barat</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                        </select>
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" id="myIg" class="form-control inpp" placeholder="*your Instagram" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFig()"><i class="fas fa-pen"></i></button>
                            <!-- <a href="#" class="btn btn-outline-secondary" type="button"onclick="myFunction()"><i class="fas fa-pen"></i></a> -->
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" id="myUtube" class="form-control inpp" placeholder="your Youtube" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFutube()"><i class="fas fa-pen"></i></button>
                            <!-- <a href="#" class="btn btn-outline-secondary" type="button"onclick="myFunction()"><i class="fas fa-pen"></i></a> -->
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" id="myFb" class="form-control inpp" placeholder="your Facebook" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFfb()"><i class="fas fa-pen"></i></button>
                            <!-- <a href="#" class="btn btn-outline-secondary" type="button"onclick="myFunction()"><i class="fas fa-pen"></i></a> -->
                        </div>
                        </div>

                         <button class="button" type="submit">SAVE</button>
                         <!-- <button class="btn btn-primary" type="submit">Button</button> -->
                    </form>

                    
                </div>
                </div>
            </div>

            <!-- content -->
            <div class="col-sm-9">
                <div class="card content">
                <div class="card-body">
                    <h5 style="text-align:left;">About</h5>
                    <form>
                        <textarea placeholder="About.."></textarea>
                        <button class="button"  style="float:right">SAVE</button>
                        <!-- <button class="btn btn-primary button" type="submit">Button</button> -->
                    </form>

                    <br><br><br><br>
                    
                    <h5 style="text-align:left;">Upload Video/ Photo Challenge</h5>
                    <!-- form start -->
                    <form class="form-inline">
                        <div class="form-group mb-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle dd" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Day 1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Day 1</a>
                                <a class="dropdown-item" href="#">Day 2</a>
                                <a class="dropdown-item" href="#">Day 3</a>
                                <a class="dropdown-item" href="#">Day 4</a>
                                <a class="dropdown-item" href="#">Day 5</a>
                                <a class="dropdown-item" href="#">Day 6</a>
                                <a class="dropdown-item" href="#">Day 7</a>
                            </div>
                            </div>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Linkupload</label>
                            <input type="text" class="form-control" id="linkUpload" placeholder="Insert Youtube link" style="width:100%">
                        </div>
                        <button type="submit" class="btn-default mb-2 button">SAVE</button>
                    </form>
                    <!-- form end -->

                    <br><br>
                    
                    <!-- enteries -->
                    <div>
                    <h5 style="text-align:left;">Your Enteries</h5>
                    <div class="scrollbar scrollbar-primary">
                        <div class="force-overflow">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/buah_kanan.png" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>

                                
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    <!-- end entreries -->
                     
                </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
    
    </div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
function myFig() {
    document.getElementById("myIg").disabled = false;
}

function myFutube() {
    document.getElementById("myUtube").disabled = false;
}
function myFfb() {
    document.getElementById("myFb").disabled = false;
}
</script>



<script>
// Get the modal
var modal = document.getElementById('myModal');

var imc = document.querySelectorAll("#myImg");
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
for(a=0;a<imc.length;a++){
    imc[a].onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
}
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>