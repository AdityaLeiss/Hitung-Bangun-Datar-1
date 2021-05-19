<?php include 'Header.php' ?>
<body onload="Persegi();">
 <h2 align="center"> LUAS PERSEGI </h2>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <form class="form-horizontal" action="Cetak_persegi.php" method="post">
 <div class="form-group has-success">

 <div class="col-sm-offset-1  col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Sisi</span>
 <input type="text" class="form-control" id="sisi" oninput="LuasPersegi();"
name="sisi" placeholder="Isikan sisi bangun">
 
 </div>
 </div>
 </div>
 

 <div class="form-group has-primary">
 
 <div class="col-sm-offset-1 col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Hasil</span>
 <input type="text" name="luas" class="form-control" id="hasil" 
placeholder="Luas bangun"></textarea>

 </div>
 </div>
 </div>
 <div class="col-sm-offset-1  col-sm-10">
 <button type="submit" class="btn btn-info" >Cetak</button>

 </div>
 </form>
 </div>
 </div>
 </div>
 <script src = "js/persegi.js"> </script>
 <script src ="js/Statistik.js"></script>