<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote</title>

    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">


<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
    padding : 0;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

body{
    background-color: #fbdee8;
}

.body-spacing{
    padding-right:5%;
    padding-left: 5%;
}


.space {
    margin-right:5px;
    margin-left: 5px;
}

.button{
    background-color: #d33f8d; /*#fb61ca*/
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    width: 50%;
    font-size:1vw;
}

.button:focus{
    outline:none;
}

.label {
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 50%;
    text-align:right;
    color: grey;
    font-family: Arial;
    font-weight: bold;
    font-size:1vw;
    padding-right : 15px;
}

.love{
    color: #d33f8d; /*#fb61ca*/
    font-size:1vw;
    text-align:right;
}

.name{
    font-weight:bold;
    color: grey;
    font-size:1vw;
    margin-top:50px;
}

a:focus{
    outline:none;
}

.vt{
    margin-top:0;
}


/* unvisited link */
a:link {
    color: grey;
    font-weight:bold;
    font-size:1vw;
    text-decoration:none;
}

/* visited link */
a:visited {
    color: grey;
    font-weight:bold;
    font-size:1vw;
    text-decoration:none;
}

/* mouse over link */
a:hover {
    color: black;
    font-size:1vw;
    text-decoration:none;
}

/* selected link */
a:active {
    color: grey;
    font-size:1vw;
    text-decoration:none;
} 

/* scrollbar start */
.scrollbar2 {
    float: left;
    height: 1000px;
    width: 100%;
    background: #fff;
    overflow:auto;
    margin-bottom: 25px;
}
.force-overflow {
    max-width: 99%;
}

.scrollbar-primary::-webkit-scrollbar {
  width: 1%;
  border-radius: 15px;
  background-color: #eee; }

.scrollbar-primary::-webkit-scrollbar-thumb {
  border-radius: 15px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #f8c128; }

/* scrollbar end */

/* modal start */
.modal-header2{
    height: 200px;
    width: 100%;
    background-color:black;
    padding-top:10px;
    padding-right:20px;
}

.modal-title2{
    color:white;
    justify-content:center;
    style:bold;
}
/* modal end */

.sosmed{
    padding:20px;
}

.abt{
    margin-right: 30px;
    margin-left: 30px;
}

.imground{
    border-radius: 50%;
    width:150px;
    height:150px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top:-100px;
}

/* days challenge */
.label2 {
    color: white;
    padding: 15px;
    font-family: Arial;
    width:9%;
    font-size:1vw;
    border: none;
    display: inline-block;
    text-align:right;
}

.label2:focus{
    outline:none;
}
.done {border-left: 25px solid #679175; background-color: #93d0a8} /* Day 1 */
.dtwo {border-left: 25px solid #006573; background-color: #0091a5;} /* Day 2 */
.dthree {border-left: 25px solid #2e7e80; background-color:  #42b5b8;} /* Day 3 */
.dfour {border-left: 25px solid #03354b; background-color: #054c6b;} /* Day 4 */
.dfive {border-left: 25px solid  #659952; background-color: #90db75;} /* Day 5 */
.dsix {border-left: 25px solid #979052; background-color:  #d8cf75;} /* Day 6 */
.dseven {border-left: 25px solid #977652; background-color: #d8a975;} /* Day 7 */

/* modal login start */

  /* Full-width input fields */
  input[type=text], input[type=password], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border: 1px solid #ea8a8a;
  }

  /* Set a style for all buttons */
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-weight:bold;
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
  }

  .cancelbtn:focus{
    outline:none;
  }

   .loginbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #ea8a8a;
  }

  .loginbtn:focus{
    outline: none;
  }

  .sendbtn{
    float:left; width: auto; padding: 10px 18px;
  }

  .sendbtn:focus{
    outline: none;
  }

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modall {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: hidden; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modall-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 0;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
    outline:none;
  }
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
     -webkit-appearance: none; 
     margin: 0; 
  }
  .grecaptcha-badge {
    opacity:0;
}
 

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }
    .cancelbtn {
      width: 100%;
    }
  }
/* modal login end */

/* image modal start*/
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
.modal-content-img {
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
.modal-content-img, #caption {    
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
.closeimg {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.closeimg:hover,
.closeimg:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
.not-active {
  pointer-events: none;
  cursor: default;
  text-decoration: none;
  color: black;
}

#profile {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

@media only screen and (max-width: 700px){
    .modal-content-img {
        width: 100%;
    }
}

.control-label .text-info { display:inline-block; color:black }
/* modal image end */


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
.samping2{
    padding-right:15%;
    padding-left: 15%;
}
.responsive {
    max-width: 100%;
    height: auto;
}

.kanan-atas{
    float:right;
    z-index:-1;
}

.kiri-atas{
    float:left;
    z-index:-1;
}
</style>
</head>
<body>
<div class="responsive">
    <!-- <a onclick="coba()" class="btn btn-warning" style="width:auto">Edit</a> -->
     
     <!-- buah atas -->
     <div class="block responsive">
    <img src="images/buah-kanan-atas.png" class="kanan-atas responsive" alt="">
    <img src="images/callout-lipice.png" class="responsive" style="width:140px; height:auto; z-index:1;margin-top:30px; margin-bottom:20px; margin-right:20px;" alt="">
    <img src="images/summercamp.png" class="responsive" style="width:300px; height:auto; z-index:1;margin-top:30px; margin-bottom:20px;" alt="">
    <img src="images/balon.png" class="responsive" style="width:300px; height:auto; z-index:-1;" alt="">
    <img src="images/buah-kiri-atas.png" class="kiri-atas responsive" alt="">
    </div>
    <!-- Button to Open the Modal -->
    <div>
        <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right; background-color:#ea8a8a">Login</button>
    </div>
    
    <div class="body-spacing"> <!-- body-spacing start -->
    
        <div>
            <div class="embed-responsive embed-responsive-21by9">   
                <!-- <iframe class="embed-responsive-item" width="100%"  src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->
                    <iframe class="embed-responsive-item" width="100%" src="https://www.youtube.com/embed/8DeJCbFhF8Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>

        <!-- card start -->
        <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 100%;">
        <div class="card-body"> <!-- card body start -->
            <br>
            <h1 class="card-title text-center" style="font-size:3vw;">VOTE YOUR FAVORITE</h1>
            <br>
            <div class="text-center">
                <button class="label2 done" style="margin-right:3px; margin-left:3px;">DAY <b>01</b></button>
                <button class="label2 dtwo" style="margin-right:3px; margin-left:3px;">DAY <b>02</b></button>
                <button class="label2 dthree" style="margin-right:3px; margin-left:3px;">DAY <b>03</b></button>
                <button class="label2 dfour" style="margin-right:3px; margin-left:3px;">DAY <b>04</b></button>
                <button class="label2 dfive" style="margin-right:3px; margin-left:3px;">DAY <b>05</b></button>
                <button class="label2 dsix" style="margin-right:3px; margin-left:3px;">DAY <b>06</b></button>
                <button class="label2 dseven" style="margin-right:3px; margin-left:3px;">DAY <b>07</b></button>
                
            </div>
            <br>
            <br>
            <!-- <a href="#">
                <i class="fas fa-chevron-left" style="font-size:25px;color:lightgrey;text-shadow:2px 2px 2px #000000;"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;PREVIOUS CHALENGE
            </a> -->

            <div class="scrollbar2 scrollbar-primary "> <!-- div utama start -->
            <div class="force-overflow"> 
                <div class="row justify-content-md-center">
                <?php if($data["cha_1"]!= "kosong"){ for($counter =0;$counter < count($data["cha_1"]);$counter++) { ?>
                    <div class="col-md-3 space">
                        <div class="row">
                            <p for="" class="col name" style="text-align:left;"><a href="" data-toggle="modal" data-target="#largeModal"><?php echo $data["profile_cha_1"][$counter]["namalengkap"] ?></a></p>
                            <p for="" class="col name" style="text-align:right"><?php echo $data["profile_cha_1"][$counter]["kota"] ?></p>   
                        </div>
                        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <img  src="<?php echo $data["cha_1"][$counter]["thumbnail_url"] ?>" alt="" id="myImg" style="width:100%;">  
                        </div> 
                        <div class="row space vt">
                            <button type="submit" class="button" onclick="document.getElementById('id02').style.display='block'">Vote</button>
                            <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                        </div>
                    </div>
                <?php }} 
                ?>
    
                </div>
            </div>
            </div>
            
        </div> <!-- card body end -->
        </div> <!-- card end -->
    </div> <!-- end body-spacing -->

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
                    <img src="images/kiri.png" class="responsive" alt="" style="float:left;margin-top:260px; z-index:-1;">
                </th>
                <th></th>
                <th class="col-xs|sm|md|lg|xl-4">
                    <img src="images/timeline.png" class="responsive" alt="" style="display:block; margin:0 auto; z-index:-1;">
                </th>
                <th class="col-xs|sm|md|lg|xl-4">
                    <img src="images/kanan.png" class="responsive" alt="" style="float:right; margin-top:-520px;">
                </th>
            </tr>
        </table>      
    </div>
    <br><br><br><br><br>

    
    <!-- footer -->
    <div class="footer" style="z-index:-1;">
        <img src="images/buah-kiri-bawah.png" class="responsive" alt="" style="position:absolute; left:0px; bottom:0px; z-index:-1;">
        <img src="images/lipice.png" class="responsive" alt="" style=" margin:0 auto;">   
        <img src="images/buah-kanan-bawah.png" class="responsive " alt="" style="position:absolute; right:0px; bottom:0px; z-index:-1;" >  
    </div>



    <!-- Modal About-->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header2">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color:white; float:right; margin-right:20px;">&times;</span>
            </button>
            <button style="top:50px; pointer-events:none" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color:white; float:none; margin: auto 0; ">HAHAHA</span>
            </button>

        </div>
        <div class="modal-body"> <!-- modal body start-->
            <img src="/images/a.jpeg" alt="Avatar" class="imground">
            <br>
            <div clas="row" style="text-align:center;"> <!-- div sosmed-->
                <a href="" class="sosmed"><i class="fab fa-instagram"></i></a>
                <a href="" class="sosmed"><i class="fab fa-youtube"></i></a> 
                <a href="" class="sosmed"><i class="fab fa-facebook-square"></i></a> 
                
            </div> <!-- div sosmed end-->
            
        </div> <!-- modal body end-->

        <div class="modal-footer"> <!-- modal footer start-->
            <div class="abt"> <!-- div about-->
                <p>
                <h1>What is CSS?</h1>
                    Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.
                    Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any 
                    XML document, including plain XML, SVG and XUL, and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript, CSS 
                    is a cornerstone technology used by most websites to create visually engaging webpages, user interfaces for web applications, and user interfaces 
                    for many mobile applications.
                </p>    
                <div class="collapse" id="collapseExample">
                    CSS is designed primarily to enable the separation of document content from document presentation, including aspects such as the layout, 
                    colors, and fonts. This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics, 
                    enable multiple HTML pages to share formatting by specifying the relevant CSS in a separate .css file, and reduce complexity and repetition in the structural content.
                    Separation of formatting and content makes it possible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, 
                    by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. It can also display the web page differently depending on the screen size or viewing device. 
                    Readers can also specify a different style sheet, such as a CSS file stored on their own computer, to override the one the author specified.
                    Changes to the graphic design of a document (or hundreds of documents) can be applied quickly and easily, by editing a few lines in the CSS file they use, rather than by changing markup in the documents.
                    The CSS specification describes a priority scheme to determine which style rules apply if more than one rule matches against a particular element. In this so-called cascade, priorities (or weights) are 
                    calculated and assigned to rules, so that the results are predictable.
                    The CSS specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free CSS 
                    validation service for CSS documents.
                </div>
                <a id="toggle" style="float:right" data-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample">
                        Read More
                </a>
                <br><br>
            </div> <!-- div about end-->
        </div><!-- modal footer start-->

        </div>
    </div>
    </div>
    <!-- Modal About End -->

   <!-- Modal Login START -->    
   <div id="id01" class="modall">
    
 
    <form class="modall-content animate" method="get" action="">
        <div class="container" style="background-color:#f1f1f1">
                <h3>Login</h3>
        </div>
        <div class="container">
            <div style="margin-right:30px; margin-left:30px">
                <div class="row">
                    <label for="vercode"><b>Validasi no Telepon</b></label>
                </div>
                <div class="row">
                    <input type="number" name="notelp" id="input-tlp" style="width:70%; margin-right:20px" placeholder="Masukkan No HP anda" required onkeyup="kirim()">
                    <button class="btn-info" type="button" id="button-kirim" style="float:left; width: auto; padding: 10px 18px;pointer-events:none">Kirim Kode Verifikasi</button>
                </div>
                <div class="row">
                    <input type="text" id="verificationcode"style="width:60%; margin-right:20px;display:none" placeholder="Kode Verifikasi">
                    <button class="btn-success" type="button" id="button-submit-kode" onclick="myFunction()" style="float:left; width: auto; padding: 10px 18px;display:none">Submit Kode</button>
                </div>
            </div>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <div style="margin-right:30px; margin-left:16px">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn-danger">Cancel</button>
                <!-- <button  type="submit" id="button-login" class="loginbtn" style="pointer-events:none">Login</button> -->
    
                <a href="#" onclick="login()" class="loginbtn" style="pointer-events:">Login</a>
             
            </div>
        </div>
    </form>
    </div>
    <!-- Modal Login END -->
    <!-- Modal Verification Start -->
    <div id="id02" class="modall">
        
        <form class="modall-content animate">
            <div class="container" style="background-color:#f1f1f1">
                    <h3>Vote</h3>
            </div>
            <div class="container">
                <div style="margin-right:30px; margin-left:30px">
                    <div class="row">
                        <label for="vercode"><b>Validasi no Telepon</b></label>
                    </div>
                    <div class="row">
                        <input type="number" name="notelp" id="input-tlp" style="width:60%; margin-right:20px" placeholder="Masukkan No HP anda" required onkeyup="kirim()">
                        <button class="btn-info" type="button" id="button-kirim" style="float:left; width: auto; padding: 10px 18px;pointer-events:none">Kirim Kode Verifikasi</button>
                    </div>
                    <div class="row">
                        <input type="text" id="verificationcode"style="width:60%; margin-right:20px;display:none" placeholder="Kode Verifikasi">
                        <button class="btn-success" type="button" id="button-submit-kode" onclick="myFunction()" style="float:left; width: auto; padding: 10px 18px;display:none">Submit Kode</button>
                    </div>
                </div>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <div style="margin-right:30px; margin-left:16px">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn btn-danger">Cancel</button>
                    <button  type="submit" id="button-login" class="loginbtn" style="pointer-events:">Vote</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Modal Verification end -->

    <!-- modal image -->
    <div id="myModal" class="modal">
    <span class="closeimg">&times;</span>
    <img class="modal-content-img" id="img01" >
    <div id="caption"></div>
    </div>
    <!-- modal image end -->


</div> <!-- div utama -->


<!-- ========================================================================== -->
<!-- script collapse start -->
<script>
$(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "Read Less") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("Read More");
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("Read Less");
    }
  });
});
</script>
<!-- script collapse end -->

<!-- modal verification -->
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
<script type="text/javascript">
  // Initialize Firebase
  
</script>
<!-- modal verification end -->

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modal2 ) {
        modal.style.display = "none";
        modal2.style.display = "none";
    } 
}

</script>
<!-- <script>

// function coba(){
//     var notelp = "912321812"
//     var settings = {
//     "async": true,
//     "crossDomain": true,
//     "url": 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/profile?key="'+notelp+'"',
//     "method": "GET",
//     "headers": {
//     "content-type": "application/json"
//     },
//     "processData": false,
//     "data": ""
//     }
//     $.ajax(settings).done(function (response) {
//         console.log(response);
// });
// }

</script> -->
<script>
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

var span = document.getElementsByClassName("closeimg")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
    var btnkirim = document.getElementById("button-kirim");
    var btnlogin = document.getElementById("button-login");
    var btnsubmitkode = document.getElementById("button-submit-kode");
    var inputkode = document.getElementById("verificationcode");
    var inputtelp = document.getElementById("input-tlp");

    function kirim(){
        if(inputtelp.value!=''){
            btnkirim.style.pointerEvents = '';
        } else{
            btnkirim.style.pointerEvents = 'none';
        }
    }
    function login(){
        var notelp = document.getElementById('input-tlp').value;
            // window.location.href = "/profile/"+notelp+"/edit";
            window.location.href = "/profile/081359868716/edit";
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
    var notelp = inputtelp.value;
    var settings = {
    "async": true,
    "crossDomain": true,
    "url": 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/profile?key="'+notelp+'"',
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
            var telpv = "+62"+inputtelp.value;
            var appVerifier = window.recaptchaVerifier;
            firebase
            .auth()
            .signInWithPhoneNumber(telpv, window.recaptchaVerifier) 
            .then(function(confirmationResult) {
                window.confirmationResult = confirmationResult;
                document.getElementById("button-kirim").style.pointerEvents = 'none';
                document.getElementById("button-kirim").textContent = "Kirim Ulang Kode Verifikasi";        
                setTimeout(kirimulang, 5000);
                btnsubmitkode.style.display = ''
                inputkode.style.display = '';
                function kirimulang(){
                    document.getElementById("button-kirim").style.pointerEvents = '';
                }
            })
            .catch(function (error) {
                // Error; SMS not sent
                console.error('Terjadi Kesalahan :', error);
                window.alert('Error during signInWithPhoneNumber:\n\n'
                    + error.code + '\n\n');
                document.getElementById("button-kirim").textContent = "Kirim Ulang Kode Verifikasi";
            });
        }
    }); 
  }

  var myFunction = function() {
    window.confirmationResult.confirm(document.getElementById("verificationcode").value)
    .then(function(result) {
        window.alert('Konfirmasi Kode Berhasil');
        console.log("success");
        btnlogin.style.pointerEvents = '';
        var notelp = document.getElementById('input-tlp').value;
        // window.location.href = "/profile/"+notelp+"/edit";
        window.location.href = "/profile/081945314191/edit";
    }, function(error) {
        window.alert('Terjadi Kesalahan :\n\n'
                + error.code + '\n\n' + error.message);
      console.log(error);
    });
  };

    
  </script>
</body>
</html>