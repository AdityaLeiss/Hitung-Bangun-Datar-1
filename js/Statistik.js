
function Total(){
  sas= parseInt(document.getElementById("hide1").value);
  peri = parseInt(document.getElementById("hide2").value);
  link = parseInt(document.getElementById("hide3").value);
  
  val = sas + peri + link;
 
      //fungsi menghitung total akses perhitungan keseluruhan
     
  persen1 = sas/val*100;
  persen2 = peri/val*100 ;
  persen3 =  link/val*100 ;
       
        //fungsi menghitung total akses perhitungan keseluruhan
  document.getElementById("total").value = val;
  document.getElementById("segitiga").value = persen1+" %";
  document.getElementById("persegi").value = persen2+" %" ;
  document.getElementById("lingkaran").value = persen3+" %" ;
  //fungsi menghitung total akses perhitungan keseluruhan
}

