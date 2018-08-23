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

</head>
<body>
<div>
    <button>press me</button>
    <span contenteditable="true">editable</span>
</div>


<script>
var textareas = 
	document.getElementsByTagName("textarea"); 

for (var i=0, l=textareas.length; i < l; i++){ 
	textareas[i].readonly = false; }
		
function addEvent(el,ev,fn){ 
	if(el.addEventListener) 
		el.addEventListener(ev,fn,false) 
	else el.attachEvent('on'+ev, fn) }
	
addEvent(document.getElementById("editButton"), "click", enableTextareas);
</script>
</body>
</html>