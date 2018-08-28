<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="/css/bootstrapprofile.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
{
    padding : 0;
    margin : 0;
    font-family: 'Montserrat', sans-serif;
}
body{
    background-color: #fbdee8;
    padding-right: 5%;
    padding-left: 5%;
    padding-top: 10%;
}
.scrollbar {
    float: right;
    height: 800px;
    width: 100%;
    background: #fff; 
    overflow:auto;
    margin-bottom: 95px;
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
    height: 70%;
    width: 70%;
    padding:5px;
    z-index:-2;
}

.size{
    object-fit:cover;
    width: 300px;
    height: 300px;
}

 .round-border{
     border: 3px solid #00b2b2;
     border-radius: 50%;
     width: 70%;
     height: 70%; 
     float: none;
     margin: 0 auto;
     margin-top:40px;
     z-index:-1;
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

.button:focus{
    outline:none;
}

button:focus{
    outline:none;
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
    border: 1px solid #eeeeee;
    border-radius: 0;       
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
    border-radius: 0px;
    border-color: #eeeeee; 
}

.dd{
    background-color:white;
    color: black;
    border-color: #eeeeee; 
}

/* input[type="file"] {
    display: none;
} */

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
    .modal-content {
        width: 100%;
    }
}

.control-label .text-info { display:inline-block; color:black }


/****** CODE CHOOSE FILE ******/

.file-upload{
    display:block;
    text-align:center;
    font-size: 12px;
}
.file-upload .file-select{
    display:block;
    border: 2px solid #dce4ec;
    color: #34495e;
    cursor:pointer;
    height:40px;
    line-height:40px;
    text-align:left;
    background:#FFFFFF;
    overflow:hidden;
    position:relative;
}
.file-upload .file-select .file-select-button{
    background:#dce4ec;
    padding:0 10px;
    display:inline-block;
    height:40px;
    line-height:40px;
}
.file-upload .file-select .file-select-name{
    line-height:40px;
    display:inline-block;
    padding:0 10px;
}
.file-upload .file-select:hover{
    border-color:#34495e;
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
}
.file-upload .file-select:hover .file-select-button{
    background:#34495e;
    color:#FFFFFF;
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
    }
.file-upload.active .file-select{
    border-color:#3fa46a; /*ijo*/
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
}
.file-upload.active .file-select .file-select-button{
    background:#3fa46a; /*ijo*/
    color:#FFFFFF;
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
    }
.file-upload .file-select input[type=file]{
    z-index:100;
    cursor:pointer;
    position:absolute;
    height:100%;width:100%;
    top:0;left:
    0;opacity:
    0;filter:alpha(opacity=0);
    }
.file-upload .file-select.file-select-disabled{
    opacity:0.65;
    }
.file-upload .file-select.file-select-disabled:hover{
    cursor:default;
    display:block;
    border: 2px solid #dce4ec;
    color: #34495e;
    cursor:pointer;
    height:40px;
    line-height:40px;
    margin-top:5px;
    text-align:left;
    background:#FFFFFF;
    overflow:hidden;
    position:relative;
    }
.file-upload .file-select.file-select-disabled:hover .file-select-button{
    background:#dce4ec;
    color:#666666;
    padding:0 10px;
    display:inline-block;
    height:40px;
    line-height:40px;
    }
.file-upload .file-select.file-select-disabled:hover .file-select-name{
    line-height:40px;
    display:inline-block;
    padding:0 10px;
    }

/****** CODE CHOOSE VIDEO ******/

.file-upload2{
    display:block;
    text-align:center;
    font-size: 12px;
}
.file-upload2 .file-select2{
    display:block;
    border: 2px solid #dce4ec;
    color: #34495e;
    cursor:pointer;
    height:40px;
    line-height:40px;
    text-align:left;
    background:#FFFFFF;
    overflow:hidden;
    position:relative;
}
.file-upload2 .file-select2 .file-select-button2{
    background:#dce4ec;
    padding:0 10px;
    display:inline-block;
    height:40px;
    line-height:40px;
}
.file-upload2 .file-select2 .file-select-name2{
    line-height:40px;
    display:inline-block;
    padding:0 10px;
}
.file-upload2 .file-select2:hover{
    border-color:#34495e;
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
}
.file-upload2 .file-select2:hover .file-select-button2{
    background:#34495e;
    color:#FFFFFF;
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
    }
.file-upload2.active .file-select2{
    border-color:#3fa46a; /*ijo*/
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
}
.file-upload2.active .file-select2 .file-select-button2{
    background:#3fa46a; /*ijo*/
    color:#FFFFFF;
    transition:all .2s ease-in-out;
    -moz-transition:all .2s ease-in-out;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
    }
.file-upload2 .file-select2 input[type=file]{
    z-index:100;
    cursor:pointer;
    position:absolute;
    height:100%;width:100%;
    top:0;left:
    0;opacity:
    0;filter:alpha(opacity=0);
    }
.file-upload2 .file-select2.file-select-disabled{
    opacity:0.65;
    }
.file-upload2 .file-select2.file-select-disabled:hover{
    cursor:default;
    display:block;
    border: 2px solid #dce4ec;
    color: #34495e;
    cursor:pointer;
    height:40px;
    line-height:40px;
    margin-top:5px;
    text-align:left;
    background:#FFFFFF;
    overflow:hidden;
    position:relative;
    }
.file-upload2 .file-select2.file-select-disabled:hover .file-select-button2{
    background:#dce4ec;
    color:#666666;
    padding:0 10px;
    display:inline-block;
    height:40px;
    line-height:40px;
    }
.file-upload2 .file-select2.file-select-disabled:hover .file-select-name2{
    line-height:40px;
    display:inline-block;
    padding:0 10px;
    }
</style>
</head>
<body>
    <div>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                <div class="card-body">
                    <!-- button edit -->
                    <label class="btn btn-outline-secondary" id="btn-edit" type="" style="float:right" for="input-nama" onclick="editprofile()"><i class="fas fa-pen">&nbsp; Edit</i></label>
                   
                    <!-- button edit end --> 

                <form id="myForm" class="form-horizontal" method="post" action="{{action('profile_controller@update', $notelp)}}" enctype="multipart/form-data">
                    @csrf                
                    <?php if($data["profile"]["rows"][0]["value"]["image"] == "" ){?>
                             
                             <div class="round-border">
                             <img src="images/lipice_icon.png" alt="..." class="rounded-circle"> 
                             <!-- button change photo profile -->
                            <div class="file-upload input-group mb-3" style="display:none" id="uploadbtn">
                                <div class="file-select">
                                <div class="file-select-button" id="fileName">Choose File</div>
                                <div class="file-select-name" id="noFile">No file chosen...</div> 
                                <input type="file" name="fileToUpload" id="chooseFile">
                                </div>
                            </div>
                        </div> 
                         <?php }else { ?>
                             <div class="round-border">
                                 <img class="rounded-circle" src='http://159.65.139.254:5984/lipice/<?php echo $data["profile"]["rows"][0]["value"]["_id"];?>/<?php echo $data["profile"]["rows"][0]["value"]["image"] ?>' style="width:100%" alt="..." > 
                            </div>
                             <br>

                         <?php } ?>
                 
                        <!-- button change photo profile -->
                        <div class="file-upload input-group mb-3" style="display:none" id="uploadbtn">
                            <div class="file-select">
                               <div class="file-select-button" id="fileName">Choose File</div>
                               <div class="file-select-name" id="noFile">No file chosen...</div> 
                               <input type="file" name="fileToUpload" id="chooseFile">
                            </div>
                        </div>

                         <div class="input-group mb-3" id="nama">
                            <h3 align="center" style="float:none;margin:0 auto"> <?php echo $data["profile"]["rows"][0]["value"]["namalengkap"]?></h3>
                        </div>

                        <div class="input-group mb-3" id="input-nama-div" style="display:none">
                            <input type="text" name="nama" id="input-nama" style="border:none;text-align:center;display:"value="<?php echo $data["profile"]["rows"][0]["value"]["namalengkap"]?>" class="form-control inpp" placeholder="Nama" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>

                        <div class="input-group mb-3">
                        <input name="_method" type="hidden" value="PATCH">
                        <input type="hidden" id="rev" name="rev" value="<?php echo $data["profile"]["rows"][0]["value"]["_rev"]?>">
                        <?php $img = 'http://159.65.139.254:5984/lipice/'.$data["profile"]["rows"][0]["value"]["_id"].'/profile.png'?>
                        <input type="hidden" id="img" name="img" value="<?php echo ($img)?>">
                        <input type="hidden" id="id" name="id" value="<?php echo $data["profile"]["rows"][0]["value"]["_id"]?>">
                        <input type="hidden" id="about" name="about" value="<?php echo $data["profile"]["rows"][0]["value"]["about"]?>">
                        <input type="hidden" id="tempatlahir" name="tempatlahir" value="<?php echo $data["profile"]["rows"][0]["value"]["tempatlahir"]?>">
                        <input type="hidden" id="email" name="email" value="<?php echo $data["profile"]["rows"][0]["value"]["email"]?>">
                        <input type="hidden" id="tgllahir" name="tgllahir" value="<?php echo $data["profile"]["rows"][0]["value"]["tgllahir"]?>">
                        <input type="hidden" id="alasan" name="alasan" value="<?php echo $data["profile"]["rows"][0]["value"]["alasan"]?>">
                        <input type="hidden" id="umur" name="umur" value="<?php echo $data["profile"]["rows"][0]["value"]["umur"]?>">

                        
                        <input disabled id="input-kota" type="text" name="kota" id="myCity" class="form-control inpp" value="<?php echo $data["profile"]["rows"][0]["value"]["kota"]?>" placeholder="kota"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <!-- <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFcity()"><i class="fas fa-pen"></i></button>
                        </div> -->
                        </div>

                        <div class="input-group mb-3">
                        <input disabled id="input-ig" type="text" name="linkig" id="myIg" value="<?php echo $data["profile"]["rows"][0]["value"]["linkig"]?>" class="form-control inpp" placeholder="your instagram" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <!-- <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFig()"><i class="fas fa-pen"></i></button>
                        </div> -->
                        </div>

                        <div class="input-group mb-3">
                        <input disabled id="input-youtube" type="text" name="linkyoutube" id="myUtube" value="<?php echo $data["profile"]["rows"][0]["value"]["linkyoutube"]?>" class="form-control inpp" placeholder="your Youtube" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <!-- <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFutube()"><i class="fas fa-pen"></i></button>
                        </div> -->
                        </div>

                        <div class="input-group mb-3">
                        <input disabled id="input-fb" type="text" id="myFb" name="linkfb" class="form-control inpp" value="<?php echo $data["profile"]["rows"][0]["value"]["linkfb"]?>"  placeholder="your Facebook" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <!-- <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFfb()"><i class="fas fa-pen"></i></button>
                        </div> -->
                        </div>
                        
                        <button type="submit" style="display:none" id="btn-submit" class="btn-default mb-2 button">SAVE</button>

                    </form>

                    <script> 
                    $(document).on('click', '#btn-submit', function(e) {
                        e.preventDefault();
                         swal({
                            title: "Hore!",
                            text: "Kamu berhasil update profile kamu",
                            icon: "success",
                             button: "oke",
                            }).then((konfirmasi) => {
                                if (konfirmasi) {
                                     $('#myForm').submit();
                                        } else {  
                                            $('#myForm').submit();
                                           }
                                           });
                                        });
                             </script>
                         </div>
                    </div>
                </div>
            <div class="col-sm-9">
                <div class="card content">
                <div class="card-body">
                    <h5 style="text-align:left;">About</h5>
                        <form method="post" action="{{action('about_controller@update', $notelp)}}" enctype="multipart/form-data" >
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <input type="hidden" id="rev" name="rev" value="<?php echo $data["profile"]["rows"][0]["value"]["_rev"]?>">
                        <?php $img = 'http://159.65.139.254:5984/lipice/'.$data["profile"]["rows"][0]["value"]["_id"].'/profile.png'?>
                        <input type="hidden" id="img" name="img" value="<?php echo ($img)?>">
                        <input type="hidden" id="id" name="id" value="<?php echo $data["profile"]["rows"][0]["value"]["_id"]?>">
                        <input type="hidden" id="nama" name="nama" value="<?php echo $data["profile"]["rows"][0]["value"]["namalengkap"]?>">
                        <input type="hidden" id="kota" name="kota" value="<?php echo $data["profile"]["rows"][0]["value"]["kota"]?>">
                        <input type="hidden" id="linkig" name="linkig" value="<?php echo $data["profile"]["rows"][0]["value"]["linkig"]?>">
                        <input type="hidden" id="linkfb" name="linkfb" value="<?php echo $data["profile"]["rows"][0]["value"]["linkfb"]?>">
                        <input type="hidden" id="linkyoutube" name="linkyoutube" value="<?php echo $data["profile"]["rows"][0]["value"]["linkyoutube"]?>">
                        <input type="hidden" id="tempatlahir" name="tempatlahir" value="<?php echo $data["profile"]["rows"][0]["value"]["tempatlahir"]?>">
                        <input type="hidden" id="email" name="email" value="<?php echo $data["profile"]["rows"][0]["value"]["email"]?>">
                        <input type="hidden" id="tgllahir" name="tgllahir" value="<?php echo $data["profile"]["rows"][0]["value"]["tgllahir"]?>">
                        <input type="hidden" id="alasan" name="alasan" value="<?php echo $data["profile"]["rows"][0]["value"]["alasan"]?>">
                        <input type="hidden" id="umur" name="umur" value="<?php echo $data["profile"]["rows"][0]["value"]["umur"]?>">
                        <textarea id="input-about" onclick="editabout()" name="about" placeholder="About.."><?php echo $data["profile"]["rows"][0]["value"]["about"] ?></textarea>
                        <button id="save-dua" type="submit"  class="btn-default mb-2 button" style="float:right;display:none">SAVE</button>
                    </form>
                    <br><br><br><br>
                        <h5 style="text-align:left;">Upload Video/ Photo Challenge</h5>
                            <!-- <form method="post" action="{{url('cha_day1')}}" enctype="multipart/form-data" class="form-inline"> -->
                              <form method="post" action="{{url('cha_video')}}" enctype="multipart/form-data" class="form-inline"> 
                    @csrf
                   
                        <div class="form-group mb-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle dd" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Day 1
                            </button>
                            <div>
                            
                            </div>
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
                        <div class="form-group mx-sm-4 mb-1">
                        
                            <!-- button upload video -->
                            <div class="file-upload2">
                            <div class="file-select2">
                                <input type="hidden" class="form-control" id="notelp" name="notelp"  value="<?php echo $notelp ?>" placeholder="Insert link" style="width:100%">
                                <div class="file-select-button2" id="fileName">Choose File</div>
                                <div class="file-select-name2" id="noFile2">No file chosen...</div> 
                                <input type="file" name="uploadVideo" accept="video/mp4" id="chooseVideo">
                            </div>
                            </div>

                        </div>
                        <button type="submit" class="btn-default mb-2 button">SAVE</button>
                    </form>
                    <br><br>
                    <div>
                    <h5 style="text-align:left;">Your Photo Enteries</h5>
                    <div class="scrollbar scrollbar-primary"><br>
                        <div class="force-overflow">
                            <div class="row">
                            <?php if($data["gambar"]!= "kosong"){ for($counter =0;$counter < count($data["gambar"]);$counter++) { ?>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-2 mb-5 bg-white rounded">
                                        <img  src="<?php echo $data["gambar"][$counter]["thumbnail_url"] ?>" alt="" id="myImg" style="width:100%  ">  
                                    </div> 
                                </div>
                            <?php } }?>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    <br><br><br>
                    <div>
                    <h5 style="text-align:left;">Your Video Enteries</h5>
                    <div class="scrollbar scrollbar-primary"><br>
                        <div class="force-overflow">
                            <div class="row">
                            <?php if($data["video"]!= "kosong"){ for($counter =0;$counter < count($data["video"]["rows"]);$counter++) { ?>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <iframe class="embed-responsive-item" width="100%" height="300px" src="http://159.65.139.254:5984/lipice/<?php echo $data["video"]["rows"][$counter]["value"]["_id"];?>/boomerang.mp4?rel=0" frameborder="0" allowfullscreen></iframe> 
                                    </div> 
                                </div>
                                <?php } }?>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <br><br><br><br>
    
    </div>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// change button
function myFcity() {
    document.getElementById("myCity").disabled = false;
}
function myFig() {
    document.getElementById("myIg").disabled = false;
}

function myFutube() {
    document.getElementById("myUtube").disabled = false;
}
function myFfb() {
    document.getElementById("myFb").disabled = false;
}

$('#edit').click(function() {
    var text = $('.text-info').text();
    var input = $('<input id="attribute" type="text" name="nama" value="' + text + '" />')
    $('.text-info').text('').append(input);
    input.select();
    input.blur(function() {
    var text = $('#attribute').val();
    $('#attribute').parent().text(text);
    $('#attribute').remove();
    });
});

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

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
    var btnedit = document.getElementById("btn-edit");
    var nama = document.getElementById("nama");
    var inputnama = document.getElementById("input-nama-div");
    var inputkota = document.getElementById("input-kota");
    var inputig = document.getElementById("input-ig");
    var inputyoutube = document.getElementById("input-youtube");
    var inputfb = document.getElementById("input-fb");
    var inputabout = document.getElementById("input-about");
    var savesatu = document.getElementById("btn-submit");
    var savedua = document.getElementById("save-dua");
    var iconupload = document.getElementById("icon-upload");
    var uploadbtn = document.getElementById("uploadbtn");
    
    var editprofile = function(){
        nama.style.display = 'none';
        inputnama.style.display = '';
        inputkota.disabled = false;
        inputyoutube.disabled = false;
        inputig.disabled = false;
        inputfb.disabled = false;
        savesatu.style.display = '';  
        uploadbtn.style.display = '';
    }

    var editabout = function(){
        savedua.style.display = '';
    }
    
</script>

<script>
$('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});

$('#chooseVideo').bind('change', function () {
  var filename = $("#chooseVideo").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload2").removeClass('active');
    $("#noFile2").text("No file chosen..."); 
  }
  else {
    $(".file-upload2").addClass('active');
    $("#noFile2").text(filename.replace("C:\\fakepath\\", "")); 
  }
});

</script>

</body>
</html>