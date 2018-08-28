<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lipice Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="table-responsive">
            <table class="table table-hover" id="example">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Umur</th>
                        <th>No Telepon</th>
                        <th>Instagram Link</th>
                        <th>Facebook Link</th>
                        <th>Alasan</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($a=0;$a<=count($data["kontestan"]["rows"])-1;$a++) {?>
                  <tr>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["namalengkap"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["tempatlahir"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["tgllahir"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["email"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["umur"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["notelp"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["linkig"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["linkfb"];?></td>
                        <td><?php echo $data["kontestan"]["rows"][$a]["value"]["alasan"];?></td>
                    </tr>
                  
                
                <?php
                }?>
                
                   
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
</body>
</html>