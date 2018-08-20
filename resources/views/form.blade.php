<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Utama</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
    * {
    padding : 0;
    margin : 0;
    }
    .warn {
      color:white;
      border-radius:30px;
      float:right;

    }
    .reg{
      color:#6EBEE0;
    }
    .card{
      padding:40px;
    }

    input[type=text], select {
        border: 1px solid #ea8a8a;
    }

    input[type=number], select {
        border: 1px solid #ea8a8a;
    }

    textarea {
      border: 1px solid #ea8a8a;
      width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border-radius: 6px;
        background-color: white;
        font-size: 16px;
        resize: none;
    }
</style>
   
</head>
<body>
<div class="card">
    <div class="card-body">
        <h2 class="card-title reg">REGISTER HERE</h2>
        <br>
        <h3 class="card-title">Calling all beauty enthusiast!</h3>
        <h3 class="card-title">Submission are available to anyone  and everyone with a passion</h3>
        <h3 class="card-title">for make-up artistry.</h3>
    <br>
        <label class="card-subtitle mb-2 text-muted">REGISTRATION FIELDS :</label>
    <br><br>
    <form class="form-horizontal" action="/action_page.php">

      <div class="form-group row">
        <label for="namaLengkap" class="col-sm-3 col-form-label">NAMA LENGKAP <b style="color:red;">*</b></label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="namaLengkap">
        </div>
      </div>


      <div class="form-group row">
      <label for="ttl" class="col-sm-3 col-form-label">TEMPAT TANGGAL LAHIR <b style="color:red;">*</b></label>
        <div class="form-group col-md-3">
          <input type="text" class="form-control" id="kota" placeholder="Kota">
        </div>
        <div class="form-group col-md-1">
          <input type="number" class="form-control" id="tgl" placeholder="Tanggal">
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="bln" placeholder="Bulan">
        </div>
        <div class="form-group col-md-2">
          <input type="number" class="form-control" id="tahun" placeholder="Tahun">
        </div>
      </div>

      <div class="form-group row">
        <label for="telp" class="col-sm-3 col-form-label">NO TELEPON <b style="color:red;">*</b></label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="telp">
        </div>
      </div>

      <div class="form-group row">
        <label for="ig" class="col-sm-3 col-form-label">LINK AKUN INSTAGRAM <b style="color:red;">*</b></label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="ig">
        </div>
      </div>

      <div class="form-group row">
        <label for="fb" class="col-sm-3 col-form-label">LINK AKUN FACEBOOK (OPTIONAL) <b style="color:red;">*</b></label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="fb">
        </div>
      </div>

      <div class="form-group row">
        <label class="control-label col-sm-3" for="comment">ALASAN MENGIKUTI #LIPICE7DAYSCHALLENGE <b style="color:red;">*</b></label>
        <div class="col-sm-9"> 
          <textarea rows="5" id="comment"></textarea>
        </div>
      </div>

      <button type="button" class="btn btn-warning warn btn-lg">Submit</button>
    
    </form>

  </div>
</div>
</body>
</html>