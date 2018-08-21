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
                    <h5 class="card-title"><?php echo $profile["rows"][0]["value"]["namalengkap"] ?>  &nbsp;&nbsp;
                        <a href="google.com"><i class="fas fa-pen"></i> </a> 
                    </h5>

                    <form action="" method="post">
                        <div class="btn-group mb-3">
                        <div class="dropdown" style="width:100%">
                            <button class="btn btn-secondary dropdown-toggle dd" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nampilin nama kota
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

                        <div class="input-group mb-3">
                        <input type="text" id="myIg" value="<?php echo $profile["rows"][0]["value"]["linkig"]?>" class="form-control inpp" placeholder="your instagram" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
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
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img src="/images/a.jpeg" alt="" style="width:100%">  
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
    <button>kakaak</button>
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

</body>
</html>