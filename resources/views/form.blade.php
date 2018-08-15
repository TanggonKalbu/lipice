<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Utama</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
    .box{
        padding:10px;
    }
</style>
   
</head>
<body>
    <div class="card" style="box">
    <div class="card-body">
        <h5 class="card-title">Calling all beauty enthusiast!</h5>
        <h5 class="card-title">Submission are available to anyone  and everyone with a passion</h5>
        <h5 class="card-title">for make-up artistry.</h5>
    <br>
        <h6 class="card-subtitle mb-2 text-muted">REGISTRATION FIELDS</h6>
    <br>
<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-3" for="nama">NAMA LENGKAP:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nama">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="ttl">TEMPAT/TANGGAL LAHIR <b style="color:red;">*</b></label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="tempat" placeholder="tempat">
    </div>
    <div class="col-sm-2"> 
        <input type="number" class="form-control" id="tgl" placeholder="tgl">
    </div>
    <div class="col-sm-2"> 
        <input type="number" class="form-control" id="bln" placeholder="bln">
    </div>
    <div class="col-sm-2"> 
        <input type="number" class="form-control" id="tahun" placeholder="thn">
    </div>    
      
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="telp">NO TELP <b style="color:red;">*</b></label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="telp">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="ig">LINK AKUN INSTAGRAM <b style="color:red;">*</b></label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" id="ig">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fb">LINK AKUN FACEBOOK (OPTIONAL) <b style="color:red;">*</b></label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" id="fb">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-3" for="comment">ALASAN MENGIKUTI #LIPICE7DAYSCHALLENGE <b style="color:red;">*</b></label>
    <div class="col-sm-9"> 
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  </div>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-round btn-warning">Submit</button>
    </div>
  </div>
</form>
</div>
</div>
</body>
</html>