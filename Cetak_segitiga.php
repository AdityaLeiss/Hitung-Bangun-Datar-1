
<?php
session_start();

$_SESSION["segitiga"]=$_SESSION["segitiga"] + 1 ;
$fill = fopen("jumlah_segitiga.txt","w") or die ("Error !");
fwrite($fill, $_SESSION["segitiga"]);
fclose($fill);

$DATE = date('Y-m-d H:i:s');
$filedate = date('Y-m-d-H-i-s');

$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$luas = $_POST['luas'];

//$file = fopen("{$filedate}_segitiga_result.txt","w") or die ("Error !");
if (file_exists("hasil_segitiga/segitiga_result.txt")){
    $file = fopen("hasil_segitiga/segitiga_result.txt","a") or die ("Error !");

    $text1 = "|| Waktu : " .$DATE ;
    fwrite($file, $text1);
    $text2 = ", Alas : " .$alas ;
    fwrite($file, $text2);
    $text3 = ", Tinggi : " .$tinggi ;
    fwrite($file, $text3);
    $text4 = ", Luas : " .$luas ;
    fwrite($file, $text4);
    fclose($file);
}else{
    $file = fopen("hasil_segitiga/segitiga_result.txt","w") or die ("Error !");

    $text1 = "|| Waktu : " .$DATE ;
    fwrite($file, $text1);
    $text2 = ", Alas : " .$alas ;
    fwrite($file, $text2);
    $text3 = ", Tinggi : " .$tinggi ;
    fwrite($file, $text3);
    $text4 = ", Luas : " .$luas ;
    fwrite($file, $text4);
    fclose($file);
}

echo '<script type="text/javascript">
window.alert("berhasil") ;
    window.location ="segitiga.php" ;
    </script>';
    //untuk mencetak hasil perhitungan ke dalam file .txt
?>



