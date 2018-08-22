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
.not-active {
  pointer-events: none;
  cursor: default;
  text-decoration: none;
  color: black;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

/* image modal end */

.control-label .text-info { display:inline-block; color:black }

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






                    <!-- <label for="name" class="control-label">
                    <h5 class="card-title text-info"><?php echo $data["profile"]["rows"][0]["value"]["namalengkap"] ?>  &nbsp;&nbsp;
                        <a href="#" id="edit" class="btn"><i class="fas fa-pen"></i> </a> 
                    </h5>
                    </label> -->

                    <label for="name" class="control-label">
                        <h5 class="text-info"><?php echo $data["profile"]["rows"][0]["value"]["namalengkap"] ?></h5>
                            <a href="#" id="edit" class="btn">
                                <i class="fas fa-pen"></i>
                            </a>
                    </label>
                    

                    <form action="" method="post">
                        <!-- <div class="btn-group mb-3">
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
                        </div> -->

                        <div class="input-group mb-3">
                        <input type="text" id="myCity" class="form-control inpp" value="<?php echo $data["profile"]["rows"][0]["value"]["kota"]?>" placeholder="kota"  aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFcity()"><i class="fas fa-pen"></i></button>
                            <!-- <a href="#" class="btn btn-outline-secondary" type="button"onclick="myFunction()"><i class="fas fa-pen"></i></a> -->
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" id="myIg" value="<?php echo $data["profile"]["rows"][0]["value"]["linkig"]?>" class="form-control inpp" placeholder="your instagram" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFig()"><i class="fas fa-pen"></i></button>
                            <!-- <a href="#" class="btn btn-outline-secondary" type="button"onclick="myFunction()"><i class="fas fa-pen"></i></a> -->
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" id="myUtube" value="<?php echo $data["profile"]["rows"][0]["value"]["linkyoutube"]?>" class="form-control inpp" placeholder="your Youtube" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="myFutube()"><i class="fas fa-pen"></i></button>
                            <!-- <a href="#" class="btn btn-outline-secondary" type="button"onclick="myFunction()"><i class="fas fa-pen"></i></a> -->
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" id="myFb" class="form-control inpp" value="<?php echo $data["profile"]["rows"][0]["value"]["linkfb"]?>"  placeholder="your Facebook" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
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
                        <textarea placeholder="About.."><?php echo $data["profile"]["rows"][0]["value"]["alasan"] ?></textarea>
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
             
                    <!-- enteries photo-->
                    <div>
                    <h5 style="text-align:left;">Your Photo Enteries</h5>
                    <div class="scrollbar scrollbar-primary"><br>
                        <div class="force-overflow">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="isDisabled">
                                    <!-- embed instagram -->
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_script" data-instgrm-version="10"style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_script" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style=" display:block; height:60px; margin:0 auto 16px; width:210px;"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 840 300" width="210" version="1"><path d="M65 49c-16 7-34 26-40 50-7 31 23 44 25 39 3-5-5-6-7-22-2-21 7-43 19-53 3-2 2 0 2 5v102c0 21-1 28-3 35-1 7-4 11-2 13s12-3 17-10c7-9 9-20 10-32v-51-68c0-5-14-11-21-8m575 102c0 11-3 20-6 26-6 12-18 16-23-1-3-10-4-26-1-39 2-13 8-23 17-22 10 0 14 13 13 36zm-162 70c0 19-3 35-9 40-9 7-21 1-19-12 2-12 13-25 28-40v12zm-2-70c-1 10-4 20-6 26-6 12-19 16-24-1-4-12-3-28-1-37 2-13 8-24 18-24 9 0 14 10 13 36zm-94-1c-1 11-3 20-6 27-7 12-19 16-24-1-4-13-3-30-1-39 2-14 8-23 18-22 9 0 14 13 13 35zm430 13c-2 0-3 3-4 7-3 14-6 17-10 17-5 0-9-7-10-21v-52c0-4-1-8-12-12-5-2-12-4-15 4a209 209 0 0 0-15 50c-1-6-2-17-2-41-1-4-1-8-7-11-3-2-13-6-16-2s-7 13-11 25l-5 15v-34c0-4-2-5-3-5l-12-3c-4 0-5 2-5 5v58c-2 11-8 25-15 25s-10-6-10-33l1-34v-13c0-3-6-5-9-5l-7-1c-2 0-4 2-4 4v4c-4-6-10-9-13-10-10-3-21-1-29 10-6 9-10 19-11 33-2 11-1 22 1 31-3 10-7 14-12 14-7 0-12-11-11-31 0-13 3-22 6-35 1-6 0-8-3-11-2-3-7-4-13-3l-19 4 1-4c2-15-14-14-19-9-3 3-5 6-6 12-1 9 7 13 7 13a139 139 0 0 1-24 51 1390 1390 0 0 1 0-54l1-12c0-3-2-4-5-5l-9-2c-5-1-7 2-7 4v4c-4-6-9-9-13-10-10-3-21-1-29 10-6 9-10 21-11 33v29c-1 8-6 16-11 16-7 0-10-6-10-33v-34l1-13c0-3-6-5-9-5l-8-1c-2 0-4 2-4 4v4c-4-6-9-9-13-10-10-3-20-1-28 10-6 7-10 15-12 33l-1 15c-2 12-11 27-19 27-4 0-8-9-8-27l1-62h27c3 0 6-12 3-13l-16-1-13-1 1-25c0-2-3-4-4-4l-11-3c-5-1-8 0-8 4l-1 27-21-1c-4 0-8 16-3 16l23 1-1 46v3c-3 19-16 29-16 29 3-12-3-22-13-30l-20-15s5-4 9-14c3-7 3-14-4-16-12-3-22 6-25 16-3 7-2 13 3 18l1 2-10 18c-9 15-15 28-21 28-4 0-4-13-4-24l2-41c0-5-3-8-7-11-3-2-8-5-11-5-5 0-19 1-33 39l-5 14 1-46-2-3c-2-1-8-4-14-4-2 0-3 1-3 4l-1 72 1 15 2 6 5 3c2 0 12 2 13-2 0-5 0-10 6-30 8-30 20-45 25-50h2l-2 38c-1 37 6 44 16 44 7 0 18-7 29-26l19-32 11 11c9 8 12 16 10 24-2 6-7 12-17 6l-7-5h-6c-3 3-6 6-7 11-1 4 3 6 8 8 4 2 12 3 17 4 21 0 37-10 49-38 2 24 11 37 26 37 10 0 20-13 25-26 1 6 3 10 6 14 11 19 34 15 46-1l4-7c1 15 13 20 20 20 8 0 16-3 21-16l3 4c11 19 34 15 46-1l1-2v10l-10 9c-18 16-31 29-32 43-2 18 13 25 24 26 12 1 22-6 29-15 5-8 9-25 9-43l-1-25a200 200 0 0 0 38-66h14c2 0 2 0 2 2s-9 34-1 55c5 15 17 19 24 19 8 0 16-6 20-15l1 3c12 19 35 15 46-1l4-7c3 16 15 20 22 20s14-3 19-16l1 12 4 3c7 2 13 1 16 1 2-1 3-2 3-6 1-9 0-25 3-36 5-20 9-27 11-31 2-2 3-2 3 0l2 35c1 13 3 21 5 23 4 7 8 8 12 8 3 0 8-1 8-5 0-3 0-16 5-35 3-13 8-24 10-28a252 252 0 0 0 3 52c5 21 18 23 23 23 11 0 19-7 22-28 0-5-1-9-4-9" fill="#262626"/></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_script" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Bayu Hari Saputro (@bayuharii)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">Jul 8, 2018 at 6:58am PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
                                    <!-- embed instagram end -->
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div>
                                    <!-- embed instagram -->
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    <!-- embed instagram end -->
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div>
                                    <!-- embed instagram -->
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    <!-- embed instagram end -->
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div>
                                    <!-- embed instagram -->
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    <!-- embed instagram end -->
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div>
                                    <!-- embed instagram -->
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    <!-- embed instagram end -->
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    </div> 
                                </div>


                                <!-- <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div> -->

                                 <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img  src="<?php echo $data["gambar"]["thumbnail_url"] ?>" alt="" id="myImg" style="width:100%  ">  
                                    </div> 
                                </div>

                                
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    <!-- end photo entreries -->
                    
                    <br><br><br>

                     <!-- enteries video-->
                    <div>
                    <h5 style="text-align:left;">Your Video Enteries</h5>
                    <div class="scrollbar scrollbar-primary"><br>
                        <div class="force-overflow">
                            <div class="row">
                                
                                <div class="col-md-3">
                                    <div>
                                        <blockquote class="instagram-media shadow-lg p-3 mb-4 bg-white rounded" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:8px;"> 
                                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> 
                                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                                    </div>
                                                </div> 
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> 
                                                    <a href="https://www.instagram.com/p/Bk-SKN1HJW0/?utm_source=ig_embed" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hail satay</a>
                                                </p> 
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/bayuharii/?utm_source=ig_embed" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Bayu Hari Saputro</a> (@bayuharii) pada 
                                                <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-08T13:58:02+00:00">8 Jul 2018 jam 6:58 PDT</time>
                                                </p>
                                            </div>
                                        </blockquote> 
                                        <script async defer src="//www.instagram.com/embed.js"></script>
                                    </div> 
                                </div>

                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" id="myImg" style="width:100%">  
                                    </div> 
                                </div>

                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img  src="<?php echo $data["gambar"]["thumbnail_url"] ?>" alt="" id="myImg" style="width:100%  ">  
                                    </div> 
                                </div>

                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <iframe class="embed-responsive-item" width="100%" height="300px" src="https://www.youtube.com/embed/8DeJCbFhF8Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
                                    </div> 
                                </div>
                                


                            </div>
                        </div>
                    </div>
                        
                    </div>
                    <!-- end video entreries -->
                     
                
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
// end change button

// change text
$('#edit').click(function() {
 var text = $('.text-info').text();
 var input = $('<input id="attribute" type="text" value="' + text + '" />')
 $('.text-info').text('').append(input);
 input.select();

 input.blur(function() {
   var text = $('#attribute').val();
   $('#attribute').parent().text(text);
   $('#attribute').remove();
 });
});
// end change text


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