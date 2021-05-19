<?php 
session_start();
  $tiga = intval($_SESSION["segitiga"]) ;
  $empat = intval($_SESSION["persegi"]) ;
  $lingkar = intval($_SESSION["lingkaran"]) ;
?>
<?php include 'Header.php' ?>
<body onload="Total();">

<h2 align="center"> STATISTIK </h2>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <form class="form-horizontal" action="" method="post">
 <div class="form-group has-success">

 <div class="col-sm-offset-1  col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Total Akses</span>
 <input type="text" class="form-control" id="total" 
name="alas" placeholder="">
 
 </div>
 </div>
 </div>
 <div class="form-group has-warning">

 <div class="col-sm-offset-1 col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Segitiga</span>
 <input type="text" class="form-control" name="tinggi" id="segitiga" 
placeholder="">
<input type="hidden" class="form-control" name="tinggi" id="hide1" value="<?php echo $tiga ?>"
placeholder="">
<input type="hidden" class="form-control" name="tinggi" id="hide2" value="<?php echo $empat ?>"
placeholder="">
<input type="hidden" class="form-control" name="tinggi" id="hide3" value="<?php echo $lingkar ?>"
placeholder="">
 </div>
 </div>
 </div>
 <div class="form-group has-primary">
 
 <div class="col-sm-offset-1 col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Lingkaran</span>
 <input type="text" name="luas" class="form-control" id="lingkaran" 
placeholder="">

 </div>
 </div>
 </div>
 <div class="form-group has-primary">

 <div class="col-sm-offset-1 col-sm-10">
 <div class="input-group">
 <span class="input-group-addon">Persegi</span>
 <input type="text" class="form-control" name="tinggi" id="persegi" 
placeholder="">

 </div>
 </div>
 </div>
 <div class="col-sm-offset-1  col-sm-10">
 <button formaction="close.php" class="btn btn-info" >Simpan Statistik</button>
 <button formaction="Reset.php" class="btn btn-info" >Reset</button>
 

 </div>

 
 
 </form>
 </div>
 </div>
 </div>
 <script src ="js/Statistik.js"></script>