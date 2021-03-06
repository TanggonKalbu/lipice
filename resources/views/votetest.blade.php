<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="images/callout-lipice.png">
      <title>Vote</title>
      <link rel="icon" href="/images/callout-lipice.png">
      <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
      <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
      <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
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
         .body-space{
         padding-right:3%;
         padding-left: 3%;
         }
         .space {
         margin-right:5px;
         margin-left: 5px;
         }
         .shadow-lg{
         margin:0 auto;
         padding:0 auto;
         }
         .button{
         background-color: #fb61ca;
         border: none;
         color: white;
         padding: 12px 28px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16pt;
         cursor: pointer;
         width: 50%;
         }
         .button:focus{
         outline:none;
         }
         .label {
         border:none;
         color: white;
         text-decoration: none;
         display: inline-block;
         width: 50%;
         text-align:right;
         color: grey;
         font-size:20pt;
         padding-right : 15px;
         padding-top: 17px;
         }
         .love{
         color: #fb61ca; 
         font-size:20pt;
         text-align:right;
         }
         .name{
         font-weight:bold;
         color: grey;
         font-size:15pt; /*1vw*/
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
         overflow-x: visible;
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
         background-color:#ea8a8a;
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
         padding: 8px;
         width:135px;
         font-size:15pt;
         border: none;
         display: inline-block;
         text-align:right;
         }
         /* .label2 {
         color: white;
         padding: 10px;
         font-family: Arial;
         width:9%;
         font-size:1vw;
         border: none;
         display: inline-block;
         text-align:right;
         } */
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
         body {font-family: Arial, Helvetica, sans-serif;}
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
         .close2 {
         position: absolute;
         right: 0;
         top: 0;
         color: #000;
         font-size: 35px;
         font-weight: bold;
         }
         .close2:hover,
         .close2:focus {
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
         overflow: hidden; /* Enable scroll if needed */
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
         .pdg-bottom{
         padding-bottom: 2rem;
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
         .shadow{
         padding:0;
         }
         /* MAIN SCROLLBAR */
         ::-webkit-scrollbar-track {
         /* -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1); */
         background-color: transparent;
         border-radius: 10px; }
         ::-webkit-scrollbar {
         width: 8px;
         background-color: transparent; }
         ::-webkit-scrollbar-thumb {
         border-radius: 10px;
         -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
         background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
         background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }
         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
         background: #555; 
         }
         /* MAIN SCROLLBAR END */
         .logo{
         width:160px; padding-top:40px; margin-right:1%;margin-bottom:10px;
         }
         .summercamp{
         width:290px; padding-top:40px; margin-bottom:10px;
         }
         .position-balon{
         display:block; position:absolute; 
         z-index:-1; top:0; right:0; background-repeat: no-repeat; background-size: cover;
         margin-top:-110px;
         margin-left:100px;
         }
         .modal-nama{
         color:white; float:none; margin: auto 0; pointer-events:none; cursor:default;
         }
         .mqvote{
         font-size:3vw;
         }
         @media screen and (max-width: 1100px) {
         .mqvote{
         font-size:3vw;
         }
         .name{
         font-weight:bold;
         color: grey;
         font-size:15pt;
         margin-top:50px;
         }
         }
         @media screen and (max-width: 1000px) {
         .mqvote{
         font-size:3vw;
         }
         .name{
         font-weight:bold;
         color: grey;
         font-size:15pt;
         margin-top:50px;
         }
         }
         }@media screen and (max-width: 900px) {
         .mqvote{
         font-size:3vw;
         }
         .name{
         font-weight:bold;
         color: grey;
         font-size:15pt;
         margin-top:50px;
         }
         }
         @media screen and (max-width: 800px) {
         .mqvote{
         font-size:20pt;
         }
         .name{
         font-weight:bold;
         color: grey;
         font-size:15pt;
         margin-top:50px;
         }
         .position-balon{
         display:block; position:absolute; 
         z-index:-1; top:0; right:0; background-repeat: no-repeat; background-size: cover;
         margin-top:50px;
         width:50%;
         height:auto;
         }
         .logo{
         width:20%;
         float:left;
         }
         .summercamp{
         width:120px;
         }
         .kanan-atas, .kiri-atas, .foo{
         width:15%;
         height:auto;
         }
         }
      </style>
   </head>
   <body>
      <div class="responsive">
      <!-- =====START===== -->
      <!-- buah atas -->
      <img src="/images/buah-kanan-atas.png" class="kanan-atas responsive" alt="" style="z-index:-1">
      <img src="/images/buah-kiri-atas.png" class="kiri-atas responsive" alt="" style="z-index:-1">
      <img src="/images/callout-lipice.png" class="responsive logo" alt="">
      &nbsp;&nbsp;
      <img src="/images/summercamp.png" class="responsive summercamp" alt="">
      <img src="/images/balon.png" class="responsive position-balon" alt="" style="">
      <!-- <a onclick="coba()" class="btn btn-warning" style="width:auto">Edit</a> -->
      <div class="body-space pdg-bottom">
      <!-- body space start -->
      <!-- Button to Open the Modal -->
      <!-- <div>
         <a  href="/remove" style="width:auto; float:right; background-color:#ea8a8a">Login</a>
      </div> -->
      <?php if($data["banner"]["ext"]== "png" ||$data["banner"]["ext"]== "jpg" || $data["banner"]["ext"]== "jpeg"   ) { ?>
      <div align="center" style="background-color:black">
         <img class="" style="width:auto; max-width:100%; height:auto; max-height:400px; z-index:1; align: center; float:none; margin-right:100px" src="http://159.65.139.254:5984/lipice/869999ee44c2ef3202a6fa489516cc71/banner.png" alt="">  
      </div>
      <?php } else {?>
      <div class="embed-responsive embed-responsive-21by9 ">
         <video class="embed-responsive-item" width="100%" height="300px" controls preload="metadata" style="background-color:black">
            <source src="http://159.65.139.254:5984/lipice/869999ee44c2ef3202a6fa489516cc71/banner.mp4" type="video/mp4">
         </video>
      </div>
      <?php } ?>
      <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 100%">
         <div class="card-body">
            <!-- card body start -->
            <br>
            <h1 class="card-title text-center mqvote">VOTE YOUR FAVORITE</h1>
            <br>
            <div class="text-center">
               <button <?php if ($data["dayall"][0]["value"]["stat_vote"] == "1") { ?> onclick="location.href='/vote/day1/edit'" <?php 
                  } ?>  class="label2 done" style="margin-right:3px; margin-left:3px;">DAY <b>01</b></button>
               <button <?php if ($data["dayall"][1]["value"]["stat_vote"] == "1") { ?> onclick="location.href='/vote/day2/edit'" <?php 
                  } ?>  class="label2 dtwo" style="margin-right:3px; margin-left:3px;">DAY <b>02</b></button>
               <button <?php if ($data["dayall"][2]["value"]["stat_vote"] == "1") { ?> onclick="location.href='/vote/day3/edit'" <?php 
                  } ?>  class="label2 dthree" style="margin-right:3px; margin-left:3px;">DAY <b>03</b></button>
               <button <?php if ($data["dayall"][3]["value"]["stat_vote"] == "1") { ?> onclick="location.href='/vote/day4/edit'" <?php 
                  } ?>  class="label2 dfour" style="margin-right:3px; margin-left:3px;">DAY <b>04</b></button>
               <button <?php if ($data["dayall"][4]["value"]["stat_vote"] == "1") { ?> onclick="location.href='/vote/day5/edit'" <?php 
                  } ?>  class="label2 dfive" style="margin-right:3px; margin-left:3px;">DAY <b>05</b></button>
               <button <?php if ($data["dayall"][5]["value"]["stat_vote"] == "1") { ?> onclick="location.href='/vote/day6/edit'" <?php 
                  } ?>  class="label2 dsix" style="margin-right:3px; margin-left:3px;">DAY <b>06</b></button>
               <button <?php if ($data["dayall"][6]["value"]["stat_vote"] == "1") { ?> onclick="location.href='/vote/day7/edit'" <?php 
                  } ?>  class="label2 dseven" style="margin-right:3px; margin-left:3px;">DAY <b>07</b></button>
            </div>
            <br>
            <br>
            <div class="scrollbar2 scrollbar-primary ">
               <!-- div utama start -->
               <div class="force-overflow">
                  <div class="row justify-content-md-center">
                     <?php 
                        $day = $data["day"]["day"];
                        if ($data["day"]["stat_vote"] != "0") {
                            if ($data["day"]["konten"] == "youtube") {
                                if ($data["cha_1"] != "kosong") {
                                   
                                    for ($counter = 0; $counter < count($data["cha_1"]); $counter++) {?>
                        <div class="col-md-3 space" style="min-width:450px">
                            <div class="row">
                            <p for="" class="col name" style="text-align:left;"><a href="" style="font-size:15pt" data-toggle="modal" data-backdrop="false" data-target="#largeModal<?php echo $counter ?>">@<?php echo $data["profile_cha_1"][$counter]["linkig"] ?></a></p>
                            <p for="" class="col name" style="text-align:right"><?php echo $data["profile_cha_1"][$counter]["kota"] ?></p>
                            </div>
                            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <iframe class="embed-responsive-item" width="100%" height="300px" src="<?php echo $data["cha_1"][$counter]["link"] ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <?php $post = $data["cha_1"][$counter]["_id"];
                            $kontestan = $data["profile_cha_1"][$counter]["notelp"];
                            ?>
                            @if(Session::has('vote'))
                            <div class="row space vt shadow">
                            <input type="hidden" id="voter" value="{{ Session::get('vote') }}">
                            <button type="submit" class="button" onclick="vote('<?php echo $post ?>','<?php echo $kontestan ?>', '{{ Session::get('vote') }}', '<?php echo $day ?>', '<?php echo "jumlah" . $counter ?>' )" >Vote Sekarang</button>
                            <span type="" id="<?php echo "jumlah" . $counter ?>"  class="label"><?php echo $data["jumlahvote"][$counter] ?> <i class="fa fa-heart love" aria-hidden="true"></i></span>
                            </div>
                            <?php $post[$counter] = "post" . ($counter + 1) ?>
                            @else
                            <div class="row space vt shadow">
                            <button type="submit" class="button" onclick="document.getElementById('id02').style.display='block'">Vote</button>
                            <span type="" id="<?php echo "jumlah" . $counter ?>"  class="label"><?php echo $data["jumlahvote"][$counter] ?> <i class="fa fa-heart love" aria-hidden="true"></i></span>
                            </div>
                            @endif
                        </div>
                        
                        
                     <!-- Modal About-->
                     <div class="modal" id="largeModal<?php echo $counter ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" >
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                           <div class="modal-content">
                              <div class="modal-header2">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true" style="color:white; float:right; margin-right:20px;">&times;</span>
                                 </button>
                                 <button style="top:50px;" type="button" class="close" style="color:white">
                                 <span aria-hidden="true" style="color:white; float:none; margin: auto 0; pointer-events:none"><?php echo $data["profile_cha_1"][$counter]["namalengkap"] ?></span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <!-- modal body start-->
                                 <?php if($data["profile_cha_1"][$counter]["image"]!= "") { ?>
                                 <img src="http://159.65.139.254:5984/lipice/<?php echo $data["profile_cha_1"][$counter]["_id"]?>/profile.png" alt="Avatar" class="imground">
                                 <?php } else { ?>
                                 <img src="/images/lipice.png" alt="Avatar" class="imground">
                                 <?php } ?>
                                 <br>
                                 <div clas="row" style="text-align:center;">
                                    <!-- div sosmed-->
                                    <a href="https://www.instagram.com/<?php echo $data["profile_cha_1"][$counter]["linkig"]?>" class="sosmed"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/<?php echo $data["profile_cha_1"][$counter]["linkyoutube"]?>" class="sosmed"><i class="fab fa-youtube"></i></a> 
                                    <a href="https://www.facebook.com/<?php echo $data["profile_cha_1"][$counter]["linkfb"]?>" class="sosmed"><i class="fab fa-facebook-square"></i></a>   
                                 </div>
                                 <!-- div sosmed end-->
                              </div>
                              <!-- modal body end-->
                              <div class="modal-footer">
                                 <!-- modal footer start-->
                                 <div class="abt">
                                    <!-- div about-->
                                    <p>
                                    <h1><?php echo $data["profile_cha_1"][$counter]["about"] ?></h1>
                                    </p>
                                    <br><br>
                                 </div>
                              </div>
                           </div>
                                 </div>
                                 </div>

                           <!-- div about end-->
                           <?php
                              }
                              }
                              } 
                              
                              
                              
                              
                              
                              
                              
                              
                              elseif ($data["day"]["konten"] == "gambar") { ?>
                           <?php if ($data["cha_1"] != "kosong") {
                              for ($counter = 0; $counter < count($data["cha_1"]); $counter++) { ?>
                           <div class="col-md-3 space" style="min-width:450px">
                              <div class="row">
                                 <p for="" class="col name" style="text-align:left;"><a href="" style="font-size:15pt" data-backdrop="false" data-toggle="modal" data-target="#largeModal<?php echo $counter ?>">@<?php echo $data["profile_cha_1"][$counter]["linkig"] ?></a></p>
                                 <p for="" class="col name" style="text-align:right"><?php echo $data["profile_cha_1"][$counter]["kota"] ?></p>
                              </div>
                              <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                 <img  src="<?php echo $data["cha_1"][$counter]["thumbnail_url"] ?>" alt="" id="myImg" style="width:100%; max-height:300px">  
                              </div>
                              <?php $post = $data["cha_1"][$counter]["thumbnail_url"];
                                 $kontestan = $data["profile_cha_1"][$counter]["notelp"];
                                 ?>
                              @if(Session::has('vote'))
                              <div class="row space vt">
                                 <input type="hidden" id="voter" value="{{ Session::get('vote') }}">
                                 <button type="submit" class="button" onclick="vote('<?php echo $post ?>','<?php echo $kontestan ?>', '{{ Session::get('vote') }}', '<?php echo $day ?>', '<?php echo "jumlah" . $counter ?>' )" >Vote sekarang</button>
                                 <span type="" id="<?php echo "jumlah" . $counter ?>"  class="label"><?php echo $data["jumlahvote"][$counter] ?> <i class="fa fa-heart love" aria-hidden="true"></i></span>
                              </div>
                              <?php $post[$counter] = "post" . ($counter + 1) ?>
                              @else
                              <div class="row space vt">
                                 <button type="submit" class="button" onclick="document.getElementById('id02').style.display='block'">Vote</button>
                                 <span type="" id="<?php echo "jumlah" . $counter ?>"  class="label"><?php echo $data["jumlahvote"][$counter] ?> <i class="fa fa-heart love" aria-hidden="true"></i></span>
                              </div>
                              @endif
                           </div>
                           <!-- Modal About-->
                           <div class="modal" id="largeModal<?php echo $counter ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" >
                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                 <div class="modal-content">
                                    <div class="modal-header2">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true" style="color:white; float:right; margin-right:20px;">&times;</span>
                                       </button>
                                       <button style="top:50px;" type="button" class="close" style="color:white">
                                       <span aria-hidden="true" style="color:white; float:none; margin: auto 0; pointer-events:none"><?php echo $data["profile_cha_1"][$counter]["namalengkap"] ?></span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <!-- modal body start-->
                                       <?php if($data["profile_cha_1"][$counter]["image"]!= "") { ?>
                                       <img src="http://159.65.139.254:5984/lipice/<?php echo $data["profile_cha_1"][$counter]["_id"]?>/profile.png" alt="Avatar" class="imground">
                                       <?php } else { ?>
                                       <img src="/images/lipice.png" alt="Avatar" class="imground">
                                       <?php } ?>
                                       <br>
                                       <div clas="row" style="text-align:center;">
                                          <!-- div sosmed-->
                                          <a href="https://www.instagram.com/<?php echo $data["profile_cha_1"][$counter]["linkig"]?>" class="sosmed"><i class="fab fa-instagram"></i></a>
                                          <a href="https://www.youtube.com/channel/<?php echo $data["profile_cha_1"][$counter]["linkyoutube"]?>" class="sosmed"><i class="fab fa-youtube"></i></a> 
                                          <a href="https://www.facebook.com/<?php echo $data["profile_cha_1"][$counter]["linkfb"]?>" class="sosmed"><i class="fab fa-facebook-square"></i></a> 
                                       </div>
                                       <!-- div sosmed end-->
                                    </div>
                                    <!-- modal body end-->
                                    <div class="modal-footer">
                                       <!-- modal footer start-->
                                       <div class="abt">
                                          <!-- div about-->
                                          <p>
                                          <h1><?php echo $data["profile_cha_1"][$counter]["about"] ?></h1>
                                          </p>
                                          <br><br>
                                       </div>
                                       <!-- div about end-->
                                    </div>
                                    <!-- modal footer start-->
                                 </div>
                              </div>
                           </div>
                           <!-- Modal About End -->
                           <?php
                              }
                              }
                              } 
                              
                              
                              
                              
                              
                              
                              
                              
                              else {
                              ?>
                           <?php if ($data["cha_1"] != "kosong") {
                              for ($counter = 0; $counter < count($data["cha_1"]); $counter++) { ?>
                           <div class="col-md-3 space" style="min-width:450px">
                              <div class="row">
                                 <p for="" class="col name" style="text-align:left;"><a href="" data-backdrop="false" style="font-size:15px" data-toggle="modal" data-target="#largeModal<?php echo $counter ?>"><?php echo $data["profile_cha_1"][$counter]["linkig"] ?></a></p>
                                 <p for="" class="col name" style="text-align:right"><?php echo $data["profile_cha_1"][$counter]["kota"] ?></p>
                              </div>
                              <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                 <video class="embed-responsive-item" width="100%" height="300px" controls preload="metadata" style="background-color:black">
                                    <source src="http://159.65.139.254:5984/lipice/<?php echo $data["cha_1"][$counter]["_id"]; ?>/boomerang.mp4?rel=0" type="video/mp4">
                                 </video>
                              </div>
                              <?php $post = $data["cha_1"][$counter]["_id"];
                                 $kontestan = $data["profile_cha_1"][$counter]["notelp"];
                                 ?>
                              @if(Session::has('vote'))
                              <div class="row space vt shadow-lg">
                                 <input type="hidden" id="voter" value="{{ Session::get('vote') }}">
                                 <button type="submit" class="button" onclick="vote('<?php echo $post ?>','<?php echo $kontestan ?>', '{{ Session::get('vote') }}', '<?php echo $day ?>', '<?php echo "jumlah" . $counter ?>' )" >Vote sekarang</button>
                                 <span type="" id="<?php echo "jumlah" . $counter ?>"  class="label"><?php echo $data["jumlahvote"][$counter] ?> <i class="fa fa-heart love" aria-hidden="true"></i></span>
                              </div>
                              <?php $post[$counter] = "post" . ($counter + 1) ?>
                              @else
                              <div class="row space vt shadow-lg">
                                 <button type="submit" class="button" onclick="document.getElementById('id02').style.display='block'">Vote</button>
                                 <span type="" id="<?php echo "jumlah" . $counter ?>"  class="label"><?php echo $data["jumlahvote"][$counter] ?> <i class="fa fa-heart love" aria-hidden="true"></i></span>
                              </div>
                              @endif
                           </div>
                           <!-- Modal About-->
                           <div class="modal" id="largeModal<?php echo $counter ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" >
                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                 <div class="modal-content">
                                    <div class="modal-header2">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true" style="color:white; float:right; margin-right:20px;">&times;</span>
                                       </button>
                                       <button style="top:50px;" type="button" class="close" style="color:white">
                                       <span aria-hidden="true" style="color:white; float:none; margin: auto 0; pointer-events:none"><?php echo $data["profile_cha_1"][$counter]["namalengkap"] ?></span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <!-- modal body start-->
                                       <?php if($data["profile_cha_1"][$counter]["image"]!= "") { ?>
                                       <img src="http://159.65.139.254:5984/lipice/<?php echo $data["profile_cha_1"][$counter]["_id"]?>/profile.png" alt="Avatar" class="imground">
                                       <?php } else { ?>
                                       <img src="/images/lipice.png" alt="Avatar" class="imground">
                                       <?php } ?>
                                       <br>
                                       <div clas="row" style="text-align:center;">
                                          <!-- div sosmed-->
                                          <a href="https://www.instagram.com/<?php echo $data["profile_cha_1"][$counter]["linkig"]?>" class="sosmed"><i class="fab fa-instagram"></i></a>
                                          <a href="https://www.youtube.com/channel/<?php echo $data["profile_cha_1"][$counter]["linkyoutube"]?>" class="sosmed"><i class="fab fa-youtube"></i></a> 
                                          <a href="https://www.facebook.com/<?php echo $data["profile_cha_1"][$counter]["linkfb"]?>" class="sosmed"><i class="fab fa-facebook-square"></i></a> 
                                       </div>
                                       <!-- div sosmed end-->
                                    </div>
                                    <!-- modal body end-->
                                    <div class="modal-footer">
                                       <!-- modal footer start-->
                                       <div class="abt">
                                          <!-- div about-->
                                          <p>
                                          <h1><?php echo $data["profile_cha_1"][$counter]["about"] ?></h1>
                                          </p>
                                          <br><br>
                                       </div>
                                       <!-- div about end-->
                                    </div>
                                    <!-- modal footer start-->
                                 </div>
                              </div>
                           </div>
                           <!-- Modal About End -->
                           <?php
                              }
                              }
                              }
                              }
                              ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- card body end -->
         </div>
         <!-- card end -->
         <br><br><br>  
         <!-- Modal Verification Start -->
         <div id="id02" class="modall">
            <form class="modall-content animate" method="post" action="{{url('votesession')}}" enctype="multipart/form-data" >
               @csrf
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
                        <button class="btn-info" type="button" id="button-kirim" style="float:left; width: auto; padding: 10px 18px;pointer-events:">Kirim Kode Verifikasi</button>
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
                     <button  type="submit" id="button-login" class="loginbtn" style="display:none">Mulai Vote</button>
                     <!-- <button  type="submit" style="pointer-events">Vote</button> -->
                  </div>
            </form>
            </div>
         </div>
         <!-- Modal Verification end -->
         <!-- modal image -->
         <div id="myModal" class="modal">
            <span class="closeimg">&times;</span>
            <img class="modal-content-img" id="img01" >
            <div id="caption"></div>
         </div>
         <!-- modal image end -->
         <!-- ===========MODAL END============   -->
         <div class="pdg-bottom" style="">
            <p style="text-align:center; font-size:20pt;" ><b>#LIPICE7DAYSCHALLENGE</b></p>
            <p style="text-align:center;font-size: 18pt;"><b>SUMMER CAMP TIMELINE</b></p>
            <br>
            <p style="text-align:center; font-size:15pt; padding-right:10%; padding-left:10%;">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod eget nunc a cursus. Vestibulum quis ipsum est. Etiam mollis scelerisque suscipit. Sed eleifend neque metus. In lacus arcu, luctus et sagittis commodo, consequat eget nisi. Duis non ex semper, ultricies nisl nec, hendrerit mauris. Sed suscipit ut sapien in vehicula. Ut lacinia bibendum rhoncus. Nam augue augue, mollis sed tincidunt quis, pellentesque eget enim. Suspendisse eleifend eu lectus in vestibulum. Nulla efficitur, elit et convallis malesuada, est nunc malesuada nulla, cursus eleifend mauris nunc id sapien. Donec condimentum nunc eget tellus imperdiet, vitae lobortis dolor suscipit. Fusce mattis, nisl vitae porttitor interdum, justo est ultricies risus, nec fermentum urna est ac lectus. Praesent varius accumsan ante eget consectetur. Suspendisse velit justo, malesuada vitae vulputate id, tincidunt ut neque. Cras sed vehicula libero.
            </p>
         </div>
         <div class="inline-block pdg-bottom">
            <!-- timeline start -->
            <table style="width:100%; z-index:-1;">
               <tr>
                  <th class="col-xs|sm|md|lg|xl-4">
                     <img src="/images/kiri.png" class="responsive" alt="" style="float:left;margin-top:300px; z-index:-1;">
                  </th>
                  <th></th>
                  <th class="col-xs|sm|md|lg|xl-4">
                     <img src="/images/timeline.png" class="responsive" alt="" style="display:block; margin:0 auto; z-index:-1;">
                  </th>
                  <th class="col-xs|sm|md|lg|xl-4">
                     <div style="width:100%">
                        <img src="/images/kanan.png" class="responsive a" alt="" style="float:right;margin-top:-520px; z-index:-1;">
                     </div>
                  </th>
               </tr>
            </table>
         </div>
         <!-- timeline end -->
         <!-- footer -->
         <div class="footer" style="z-index:-1; padding-bottom:15px">
            <img src="/images/buah-kiri-bawah.png" class="responsive foo" alt="" style="position:absolute; left:0px; bottom:0px; z-index:-1;">
            <img src="/images/lipice.png" class="responsive foo" alt="" style=" margin:0 auto;">   
            <img src="/images/buah-kanan-bawah.png" class="responsive foo" alt="" style="position:absolute; right:0px; bottom:0px; z-index:-1;" >  
         </div>
         <br>
      </div>
      <!-- =====END===== -->
      <!-- script collapse start -->
      <script>
         $('#largemodal').modal('hide');
         
         
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
      <script>
         var modal = document.getElementById('myModal');
         var imc = document.querySelectorAll("#myImg");
         var posts = document.querySelectorAll("#post");
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
         var post;
         var voter;
         var kontestan;
         var day;
         var jumlah;
         
          function vote(post,kontestan,voter,day,jumlah){
                     var settings = {
                     "async": true,
                     "crossDomain": true,
                     "url": 'http://159.65.139.254:5984/lipice/_design/view/_view/vote?key=["'+day+'","'+voter+'"]',
                     "method": "GET",
                     "headers": {
                     "content-type": "application/json"
                     },
                     "processData": false,
                     "data": ""
                     }
                     $.ajax(settings).done(function (response) {
                         var r = confirm("Apakah kamu yakin?");
                         if (r == true) {
                             if(response.rows ==''){
                             var settings = {
                             "async": true,
                             "crossDomain": true,
                             "url": "http://admin:lipice@159.65.139.254:5984/lipice/",
                             "method": "POST",
                             "headers": {
                             "content-type": "application/json"
                         },
                             "processData": false,
                             "data": '{\n\t\"type\" :\"vote\",\n\t\"voter\" : \"'+voter+'\",\n\t\"kontestan\" :\"'+kontestan+'\",\n\t\"day\" : \"'+day+'\",\n\t\"konten\": \"'+post+'\"\n}'
                             }
                             $.ajax(settings).done(function (response) {
                                 var settings = {
                                 "async": true,
                                 "crossDomain": true,
                                 "url": 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/jumlah_vote?key=["'+kontestan+'","'+day+'"]',
                                 "method": "GET",
                                 "headers": {
                                 "content-type": "application/json"
                                 },
                                 "processData": false,
                                 "data": ""
                                 }
                                 $.ajax(settings).done(function (response) {
                                 document.getElementById(jumlah).innerHTML = response.rows[0].value + " " + '<i class="fa fa-heart love" aria-hidden="true"></i>' ;
                                 });
                                 
                             });
                             }
                             else {
                                 window.alert("Kamu udah vote untuk challenge ini")
                             }
                         }
                     
                  });
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
         
         function logout(){
             
             window.location.href = 'votesession/remove';
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
         
         var myFunction = function() {
         window.confirmationResult.confirm(document.getElementById("verificationcode").value)
         .then(function(result) {
             window.alert('Konfirmasi Kode Berhasil');
             console.log("success");
             btnlogin.style.display='';
             //var notelp = document.getElementById('input-tlp').value;
             // window.location.href = "/profile/"+notelp+"/edit";
             //window.location.href = "/votesession/store";
         
         }, function(error) {
             window.alert('Terjadi Kesalahan :\n\n'
                     + error.code + '\n\n' + error.message);
           console.log(error);
         });
         };
         
         var cekday = function(){
         
         }
         
      </script>
      <script>
         var konfirmasi = function() {
            if (confirm('Do you want to submit?')) {
                .submit();
            } else {
                return false;
            }
         }
      </script>
   </body>
</html>