<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lipice Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- datatable -->
  <script src=" {{ URL::asset('assets/datatable/datatables.min.js') }}"></script>  
  <link rel="stylesheet" href="{{ URL::asset('assets/datatable/datatables.min.css') }}">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <a class="navbar-brand" href="#">Lipice</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{URL('admin')}}">Kontestan</a></li>
      <li><a href="{{URL('adminchallenge')}}">Challenge</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Approval
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a onclick="location.href='/adminapproval/day1/edit'">Day 1</a></li>
          <li><a onclick="location.href='/adminapproval/day2/edit'">Day 2</a></li>
          <li><a onclick="location.href='/adminapproval/day3/edit'">Day 3</a></li>
          <li><a onclick="location.href='/adminapproval/day4/edit'">Day 4</a></li>
          <li><a onclick="location.href='/adminapproval/day5/edit'">Day 5</a></li>
          <li><a onclick="location.href='/adminapproval/day6/edit'">Day 6</a></li>
          <li><a onclick="location.href='/adminapproval/day7/edit'">Day 7</a></li>
        </ul>
      </li>
     <li class="active"><a href="{{URL('adminbanner')}}">Banner</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="table-responsive">
            <table class="table table-hover" id="example">
                <thead>
                    <tr>
                        <td>
                            Banner
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <div class="file-upload input-group mb-3" style="display:" id="uploadbtn">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName">Choose File</div>
                                    <div class="file-select-name" id="noFile">No file chosen...</div> 
                                    <input type="file" name="fileToUpload" id="chooseFile">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php //print_r($data["kontestan"]);?>
<?php //var_dump($data["kontestan"]);?>
<style>
.navbar-inverse {
    background-color: #d33f8d;
    border: none;
    color: white;
}
.navbar-inverse .navbar-nav>li>a {
    color: #ffffff;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #a20d5c;
    border: none;
}
.navbar-inverse .navbar-brand {
    color: white;
}
</style>
<script type="text/javascript"> 
	$(document).ready(function(){
		$('#example').DataTable();
		});
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
<style>
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

</style>
</body>
</html>