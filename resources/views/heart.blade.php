<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIPICE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

<style>
body{
    margin : 0;
    padding: 0;
}

.container{
    position: absolute;
    width: 500px;
    top : 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    overflow: hidden;
}

.container img{
    width: 100%;
}

.container .heart{
    position: absolute;
    top: 50%;
    left : 50%;
    transform: translate(-50%,-50%) scale(0);
    color: #f1f1f1;
    font-size:100px;
    transition: 0.3s;
}

.container input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 99999;
    opacity:0;
    cursor: pointer;
}

.container:hover > .heart{
    transform: translate(-50%,-50%) scale(1);
}

.container input:checked + .heart{
    color:red;
}
</style>
</head>
<body>
    <div class="container">
        <img src="/images/mount.jpeg" alt="">
        <input type="checkbox" name="" id="">
        <div class="heart"> 
            <i class="fas fa-heart"></i>
        </div>
    </div>
</body>
</html>