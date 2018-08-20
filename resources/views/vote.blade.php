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
  width: 12px;
  background-color: #eee; }

.scrollbar-primary::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #f7c729; }

/* scrollbar end */

.space {
    margin-right:15px;
    margin-left: 15px;
}

.button{
    background-color: #e01171;
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
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
    color: #e01171; 
    font-size:1vw;
    text-align:right;
}

.name{
    font-weight:bold;
    color: grey;
    font-size:1vw;
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
    padding-right:100px;
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
  width: 20px;
  border-radius: 15px;
  background-color: #eee; }

.scrollbar-primary::-webkit-scrollbar-thumb {
  border-radius: 15px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #f7c729; }

/* scrollbar end */

/* modal start */
.modal-header{
    height: 200px;
    width: 100%;
    background-color:black;
}
.modal-title{
    color:white;
    text-align:center;
    style:bold;
}
/* modal end */

.sosmed{
    padding:20px;
}

</style>
</head>
<body>
<!-- <img src="images/buah_kiri_atas.png" style="width:121px; height:221px; float:left;" alt="">
<img src="images/buah_kanan_atas.png" style="width:109px; height:128px; float:right;" alt="">
<img src="images/lipice_icon.png" style="width:162px; height:150px; float:left;" alt="">
<img src="images/summercamp.png" style="width:514px; height:250px; float:right;" alt=""> -->
<div>
    <div class="embed-responsive embed-responsive-21by9 ">   
        <iframe class="embed-responsive-item" width="100%"  src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
    </div>

    <!-- card start -->
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 100%">
    <div class="card-body"> <!-- card body start -->
        <br>
        <h1 class="card-title text-center" style="font-size:3vw;">VOTE YOUR FAVORITE</h1>

        <a href="#">
            <i class="fas fa-chevron-left" style="font-size:25px;color:lightgrey;text-shadow:2px 2px 2px #000000;"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;PREVIOUS CHALENGE
        </a>

        <br><br>



    <div class="scrollbar2 scrollbar-primary"> <!-- div utama start -->
        <div class="force-overflow"> 
            <!-- nama dan kota -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left"><a href="" data-toggle="modal" data-target="#largeModal">Putri clarisa</a></label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>

                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>

                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>
            </div>
            
            <!-- image -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">   
                </div>

                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">
                </div>

                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">
                </div>
            </div>
        
            <!-- button and vote -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>

                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label" >500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>

                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>
            </div>

            <br>

            <!-- nama dan kota -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>

                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>

                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>
            </div>
            
            <!-- image -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">   
                </div>

                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">
                </div>

                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">
                </div>
            </div>
        
            <!-- button and vote -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>

                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label" >500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>

                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>
            </div>

            <br>
             <!-- nama dan kota -->
             <div class="row justify-content-md-center">
                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>

                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>

                <div class="col-md-3 space">
                    <label for="" class="name" style="float:left">Putri clarisa</label>
                    <label for="" class="name" style="float:right">Jakarta</label>    
                </div>
            </div>
            
            <!-- image -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">   
                </div>

                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">
                </div>

                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded space">
                    <img src="/images/a.jpeg" alt="" style="width:100%">
                </div>
            </div>
        
            <!-- button and vote -->
            <div class="row justify-content-md-center">
                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>

                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label" >500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>

                <div class="col-md-3 space btn-group" role="group">
                    <button type="submit" class="button">Vote</button>
                    <span type="" class="label">500 <i class="fa fa-heart love" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        
    </div> <!-- div utama end -->



        
    </div> <!-- card body end -->
    </div> <!-- card end -->

    <br><br><br>

    <!-- Button trigger modal -->
<div class="row mb-4">
    <div class="col text-center">
      <h3>The Large Modal</h3>
      <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Click to open Modal</a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Large Modal aha</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white; size:20px;">&times;</span>
        </button>
      </div>
      <div class="modal-body"> <!-- modal body start-->

        <div clas="row" style="text-align:center;"> <!-- div sosmed-->
            <a href="" class="sosmed"><i class="fab fa-youtube"></i></a> 
            <a href="" class="sosmed"><i class="fab fa-twitter"></i></a> 
            <a href="" class="sosmed"><i class="fab fa-instagram"></i></a>
        </div> <!-- div sosmed end-->
       
      </div> <!-- modal body end-->

      <div class="modal-footer"> <!-- modal footer start-->
         <div> <!-- div about-->
            <h1>What is CSS?</h1>
            Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.
            Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any 
            XML document, including plain XML, SVG and XUL, and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript, CSS 
            is a cornerstone technology used by most websites to create visually engaging webpages, user interfaces for web applications, and user interfaces 
            for many mobile applications.
            <div>
            <br>
            <span id="text">CSS is designed primarily to enable the separation of document content from document presentation, including aspects such as the layout, 
            colors, and fonts. This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics, 
            enable multiple HTML pages to share formatting by specifying the relevant CSS in a separate .css file, and reduce complexity and repetition in the structural content.
            Separation of formatting and content makes it possible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, 
            by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. It can also display the web page differently depending on the screen size or viewing device. 
            Readers can also specify a different style sheet, such as a CSS file stored on their own computer, to override the one the author specified.
            Changes to the graphic design of a document (or hundreds of documents) can be applied quickly and easily, by editing a few lines in the CSS file they use, rather than by changing markup in the documents.
            The CSS specification describes a priority scheme to determine which style rules apply if more than one rule matches against a particular element. In this so-called cascade, priorities (or weights) are 
            calculated and assigned to rules, so that the results are predictable.
            The CSS specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free CSS 
            validation service for CSS documents.<br>
            </span>
            </div>
            <div class="btn-container">
                <a id="toggle" style="float:right" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Read More
                </a>
            </div>
        </div> <!-- div about end-->
      </div><!-- modal footer start-->

    </div>
  </div>
</div>
<!-- Modal End -->

</div>

<script>
$(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "Read More") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("Read Less");
      $("#text").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("Read More");
      $("#text").slideUp();
    }
  });
});
</script>

</body>
</html>