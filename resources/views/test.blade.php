<html>
<head>
<body>
<input type="text" name="" id="nama" class="form-control" value="" required="required" pattern="" title="" onkeyup="test()">
<button type="submit" class="btn btn-primary" id="button" disabled>Submit</button>
<div id="aa" style="display:none; background-color:red; height:30px; width:30px"></div>

</body>
<script>
    function test(){
        var nama = document.getElementById("nama");
        var button = document.getElementById("button");
        var aa = document.getElementById("aa");
        if(nama!=''){
            button.disabled = false;
            aa.style.display = ""
        }
    }
</script>
</head></html>