<?php
session_start();

$_SESSION["persegi"]=$_SESSION["persegi"] + 1 ;
$DATE = date('Y-m-d H:i:s');
$filedate = date('Y-m-d-H-i-s');

$sisi = $_POST['sisi'];
$luas = $_POST['luas'];

if (file_exists("hasil_persegi/persegi_result.txt")){
    $file = fopen("hasil_persegi/persegi_result.txt","a") or die ("Error !");

    $text1 = "|| Waktu : " .$DATE ;
    fwrite($file, $text1);
    $text2 = ", Sisi : " .$sisi ;
    fwrite($file, $text2);
    $text3 = ", Luas : " .$luas ;
    fwrite($file, $text3);
    fclose($file);
}else{
    $file = fopen("hasil_persegi/persegi_result.txt","w") or die ("Error !");

    $text1 = "|| Waktu : " .$DATE ;
    fwrite($file, $text1);
    $text2 = ", Sisi : " .$sisi ;
    fwrite($file, $text2);
    $text3 = ", Luas : " .$luas ;
    fwrite($file, $text3);
    fclose($file);
}


echo '<script type="text/javascript">
window.alert("success") ;
    window.location ="persegi.php" ;
    </script>';
    //untuk mencetak hasil perhitungan ke dalam file .txt
?>
