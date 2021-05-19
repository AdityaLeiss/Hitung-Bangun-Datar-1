<?php 
session_start();
error_reporting(0);
if (file_exists("hasil_segitiga/jumlah_segitiga.txt")){
 $fill = fopen("hasil_segitiga/jumlah_segitiga.txt","r") or die ("Error !");
 $stiga = fread($fill,5);
 $_SESSION["segitiga"] = $stiga;
}else{
$fill = fopen("hasil_segitiga/jumlah_segitiga.txt","w") or die ("Error !");
 $stiga = fread($fill,5);
 fwrite($fill, 0);
 $_SESSION["segitiga"] = 0;
}
fclose($fill); 

if (file_exists("hasil_persegi/jumlah_persegi.txt")){
    $fill = fopen("hasil_persegi/jumlah_persegi.txt","r") or die ("Error !");
    $perse = fread($fill,5);
    $_SESSION["persegi"] = $perse;
   }else{
   $fill2 = fopen("hasil_persegi/jumlah_persegi.txt","w") or die ("Error !");
    $perse = fread($fill2,5);
    fwrite($fill2, 0);
    $_SESSION["persegi"] = $lingk;
   }
fclose($fill2); 

if (file_exists("hasil_lingkaran/jumlah_lingkaran.txt")){
    $fill3 = fopen("hasil_lingkaran/jumlah_lingkaran.txt","r") or die ("Error !");
    $lingk = fread($fill3,5);
    $_SESSION["lingkaran"] = $lingk;
   }else{
   $fill3 = fopen("hasil_lingkaran/jumlah_lingkaran.txt","w") or die ("Error !");
    $lingk = fread($fill3,5);
    fwrite($fill3, 0);
    $_SESSION["lingkaran"] = 0;
   }
fclose($fill3); 


echo '<script type="text/javascript">
    window.location ="Home.php" ;
    </script>';
?>