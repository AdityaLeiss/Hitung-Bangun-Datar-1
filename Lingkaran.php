<?php include 'Header.php' ?>
<body onload="Lingkaran();">
<h2 align="center"> LUAS LINGKARAN </h2>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <form class="form-horizontal" action="Cetak_lingkaran.php" method="post">
 <div class="form-group has-success">

 <div class="col-sm-offset-1  col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Jari-Jari</span>
 <input type="text" class="form-control" id="r" oninput="LuasLingkaran();"
name="r" placeholder="Isikan jari-jari bangun">
 
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
 <script src = "js/lingkaran.js"> </script>
 <script src ="js/Statistik.js"></script>