 <?php include 'Header.php' ?>

 <body onload="Segitiga();">
 
 <h2 align="center"> LUAS SEGITIGA </h2>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <form class="form-horizontal" action="Cetak_segitiga.php" method="post">
 <div class="form-group has-success">

 <div class="col-sm-offset-1  col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Alas</span>
 <input type="text" class="form-control" id="alas" 
name="alas" placeholder="Isikan alas bangun">
 
 </div>
 </div>
 </div>
 <div class="form-group has-warning">

 <div class="col-sm-offset-1 col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Tinggi</span>
 <input type="text" class="form-control" name="tinggi" id="tinggi" oninput="Luas();"
placeholder="Isikan tinggi bangun">

 </div>
 </div>
 </div>
 <div class="form-group has-primary">
 
 <div class="col-sm-offset-1 col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Hasil</span>
 <input type="text" name="luas" class="form-control" id="hasil" 
placeholder="Luas Bangun"></textarea>

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
 <script src = "js/segitiga.js"> </script>
 <script src ="js/Statistik.js"></script>
 <script type="text/javascript"> window.onbeforeunload= Closeout(); </script>
