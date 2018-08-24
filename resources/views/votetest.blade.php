<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote</title>

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
}

body{
    background-color: #fbdee8;
    padding-right:5%;
    padding-left: 5%;
    padding-top: 200px;
}


.space {
    margin-right:5px;
    margin-left: 5px;
}

.button{
    background-color: #fb61ca;
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
    color: #fb61ca; 
    font-size:1vw;
    text-align:right;
}

.name{
    font-weight:bold;
    color: grey;
    font-size:1vw;
    margin-top:50px;
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
    height: 150px;
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
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
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
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
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


</style>
</head>
<body>
<div>
    <a href="{{action('profile_controller@edit', '081945314191')}}" class="btn btn-warning" style="width:auto">Edit</a>

    <!-- Button to Open the Modal -->
    <div>
        <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right">Login</button>
    </div>

    <!-- Modal Login START -->    
    <div id="id01" class="modal">
    
    <form class="modal-content animate" action="/action_page.php">
    
        <div class="container">
            <div style="margin-right: 40px; margin-left: 40px">
                <label for="vercode" style="font-size:1vw"><b>Kode Validasi no Telepon</b></label>
                <br>
                <input type="text"  name="vercode" required>
    
                <button type="submit">Submit Code</button>
            </div>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <div style="margin-right: 40px; margin-left: 40px">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </div>
    </form>
    </div>
    <!-- Modal Login END -->

  
    <div class="embed-responsive embed-responsive-21by9 ">   
        <!-- <iframe class="embed-responsive-item" width="100%"  src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->
            <iframe class="embed-responsive-item" width="100%" src="https://www.youtube.com/embed/8DeJCbFhF8Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <!-- card start -->
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 100%">
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
                <div class="col-md-3 space">
                    <div class="row">
                        <p for="" class="col name" style="text-align:left"><a href="" data-toggle="modal" data-target="#largeModal">Putri clarisa</a></p>
                        <p for="" class="col name" style="text-align:right">Jakarta</p>   
                    </div>
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
                    <div class="row space vt">
                        <button type="submit" class="button" data-toggle="modal" data-target="#exampleModalCenter">Vote</button>
                        <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-md-3 space">
                    <div class="row">
                        <p for="" class="col name" style="text-align:left"><a href="" data-toggle="modal" data-target="#largeModal">Putri clarisa</a></p>
                        <p for="" class="col name" style="text-align:right">Jakarta</p>   
                    </div>
                    <div class="shadow p-3 mb-5 bg-white rounded"> 
                        <iframe class="embed-responsive-item" width="100%" height="300px" src="https://www.youtube.com/embed/8DeJCbFhF8Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   
                    </div>
                    <div class="row space vt">
                        <button type="submit" class="button" data-toggle="modal" data-target="#exampleModalCenter">Vote</button>
                        <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-md-3 space">
                    <div class="row">
                        <p for="" class="col name" style="text-align:left"><a href="" data-toggle="modal" data-target="#largeModal">Putri clarisa</a></p>
                        <p for="" class="col name" style="text-align:right">Jakarta</p>   
                    </div>
                    <div class="shadow p-3 mb-5 bg-white rounded"> 
                        <iframe class="embed-responsive-item" width="100%" height="300px" src="https://www.youtube.com/embed/8DeJCbFhF8Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   
                    </div>
                    <div class="row space vt">
                        <button type="submit" class="button" data-toggle="modal" data-target="#exampleModalCenter">Vote</button>
                        <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-md-3 space">
                    <div class="row">
                        <p for="" class="col name" style="text-align:left"><a href="" data-toggle="modal" data-target="#largeModal">Putri clarisa</a></p>
                        <p for="" class="col name" style="text-align:right">Jakarta</p>   
                    </div>
                    <div class="shadow p-3 mb-5 bg-white rounded"> 
                        <iframe class="embed-responsive-item" width="100%" height="300px" src="https://www.youtube.com/embed/8DeJCbFhF8Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   
                    </div>
                    <div class="row space vt">
                        <button type="submit" class="button" data-toggle="modal" data-target="#exampleModalCenter">Vote</button>
                        <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-md-3 space">
                    <div class="row">
                        <p for="" class="col name" style="text-align:left"><a href="" data-toggle="modal" data-target="#largeModal">Putri clarisa</a></p>
                        <p for="" class="col name" style="text-align:right">Jakarta</p>   
                    </div>
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
                    <div class="row space vt">
                        <button type="submit" class="button" data-toggle="modal" data-target="#exampleModalCenter">Vote</button>
                        <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-md-3 space">
                    <div class="row">
                        <p for="" class="col name" style="text-align:left"><a href="" data-toggle="modal" data-target="#largeModal">Putri clarisa</a></p>
                        <p for="" class="col name" style="text-align:right">Jakarta</p>   
                    </div>
                    <div class="shadow p-3 mb-5 bg-white rounded"> 
                        <iframe class="embed-responsive-item" width="100%" height="300px" src="https://www.youtube.com/embed/8DeJCbFhF8Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   
                    </div>
                    <div class="row space vt">
                        <button type="submit" class="button" data-toggle="modal" data-target="#exampleModalCenter">Vote</button>
                        <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                    </div>
                </div>

                
                
            </div>
        </div>
        </div>






        
    </div> <!-- card body end -->
    </div> <!-- card end -->

    <br><br><br>



<!-- Modal About-->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header2">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white; size:20px;">&times;</span>
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



<!-- Modal Verification Start -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enter Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:black;padding-right:10px;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- verification start -->
        <form align="center">
            <input type="text" id="verificationcode" placeholder="Enter Verification" style="padding-left:10px">
            <input type="button" value="Submit" onclick="myFunction()">
        </form>
        <br>
        <div id="recaptcha-container" align="center"></div>
        <!-- verification end -->
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- Modal Verification end -->

</div>

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
<script type="text/javascript">
  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
  firebase.auth().signInWithPhoneNumber("+62081945314191", window.recaptchaVerifier) 
  .then(function(confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log(confirmationResult);
  });
  var myFunction = function() {
    window.confirmationResult.confirm(document.getElementById("verificationcode").value)
    .then(function(result) {
      
    }, function(error) {
      console.log(error);
    });
  };
</script>
<!-- modal verification end -->

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>