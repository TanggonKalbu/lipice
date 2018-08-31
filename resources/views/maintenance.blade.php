<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Under Maintenance</title>
    <link rel="icon" href="images/callout-lipice.png">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

<style>
* {
    padding : 0;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

body{
    background-color: #fbdee8;
    
}
h1, h2, h3, h4, h5{
    color:grey;
    text-align:center;
    letter-spacing: 3px; 
    word-spacing: 10px;
    /* font-size:2vw; */

}
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
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

.ex1{
    max-width:100%;
    margin:auto;
}

/* footer end */

@media screen and (max-width: 800px) {

h1,h2, h3, h4, h5{
    color:grey;
    text-align:center;
    letter-spacing: 3px; 
    word-spacing: 10px;
    font-size:20px;   
}

.responsive {
    width: 15%;
    height: auto;
}

}

</style>
</head>
<body>
<div>
    <div class="ex1">
        <img src="images/buah-kanan-atas.png" class="kanan-atas responsive" alt="">
        <img src="images/buah-kiri-atas.png" class="kiri-atas responsive" alt="">
    </div>

    
    <div class="col">
        <div class="centered">
            <h1>Maaf halaman ini belum bisa diakses.</h1>
        </div>
    </div>
   
    

        



    <!-- footer -->
    <div class="footer" style="z-index:-1; padding-bottom:15px">
        <img src="images/buah-kiri-bawah.png" class="responsive" alt="" style="position:absolute; left:0px; bottom:0px; z-index:-1;">
        <img src="images/lipice.png" class="responsive" alt="" style=" margin-right:auto; margin-left:auto; display:block;">   
        <img src="images/buah-kanan-bawah.png" class="responsive " alt="" style="position:absolute; right:0px; bottom:0px; z-index:-1;" >  
    </div>   
</div>
</body>
</html>