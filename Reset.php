<?php
   session_start();

   $_SESSION["segitiga"] = 0 ;
   $_SESSION["persegi"] = 0 ;
   $_SESSION["lingkaran"] = 0 ;

   echo '<script type="text/javascript">
    window.location ="Statistik.php" ;
    </script>';

?>
