<?php 
session_start();
$persegi = $_SESSION["persegi"];
$segitiga = $_SESSION["segitiga"];
$lingkaran = $_SESSION["lingkaran"];

$fill = fopen("hasil_segitiga/jumlah_segitiga.txt","w") or die ("Error !");
fwrite($fill, $segitiga);
fclose($fill); 

$fill2 = fopen("hasil_persegi/jumlah_persegi.txt","w") or die ("Error !");
fwrite($fill2, $persegi);
fclose($fill2); 


$fill3 = fopen("hasil_lingkaran/jumlah_lingkaran.txt","w") or die ("Error !");
fwrite($fill3, $lingkaran);
fclose($fill3); 


echo '<script type="text/javascript">
    window.location = "Statistik.php" ;
    </script>';
?>