<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="js/main.js"></script>

<body>

<input type="text" name="link" id="link" class="form-control" required="required">

<button type="button" class="btn btn-default" onclick=tes()>button</button>
  

<script> 
  var linka = document.getElementById("link");
  var tes = function(){
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": linka.value,
  "method": "GET",
  "headers": {
    "cookie": "rur=PRN; urlgen=%22%7B%5C%22203.128.93.3%5C%22%3A%2018103%7D%3A1fv2Ch%3AzBNbW49WSECQlVjpPoDz2FbcUtk%22; mid=W4TWhwAEAAH9JLkMVVB2649o6bMN; mcd=3; csrftoken=uVzzs61ysBrBt3tMUge36pSbhhd7rMhi"
  }
}
$.ajax(settings).done(function (response) {
  if(response !=''){
    console.log('aktif');
  }
}).fail(function(response){
  if(response !=''){
    console.log('enggak');
    console.log(linka.value)
  }
});
};
</script>
</body></head></html>
