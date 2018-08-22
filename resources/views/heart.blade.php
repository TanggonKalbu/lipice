<!-- <!DOCTYPE html>
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
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.control-label .text-info { display:inline-block; }
</style>
</head>
<body>
<label for="name" class="control-label"><p class="text-info">Saghir</p><i class="icon-star"></i></label>
<div class="controls">
   <a href="#" id="edit" class="btn">Edit</a>
</div>
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>

<script>
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
</script>
</body>
</html>