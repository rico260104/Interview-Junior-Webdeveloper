<?php 
// $k = 49; // 65 Nilai ASCII 

// for($i = 1; $i <= 5; $i++){
// for($j = 1; $j <= $i; $j++){
//    // echo chr($k), " ";
//    // $k++;
//    echo "$j";
// }
// echo "</br>";
// }

// segitiga urut
$rows = 4;
$n = 1;

for($i = 1; $i <= $rows; $i++){
   for($j = 1; $j <= $i; $j++){
      echo $n, "  ";
      $n++;
      
   }
   echo "</br>";
}
?>
<!-- segitiga loop sampai variable i -->
<!-- variable i samadengan 1. jalankan variable i sampai batas rows. jika kondisi tersebut terpenuhi maka tambah 1 ke variable i. variable j samadengan 1. jalankan variable j sampai samadengan variable i. jika kondisi tersebut terpenuhi maka tambah 1 ke variable i sampai samadengan variabel i. enter hasil loop
i=1 j=1 maka cetak setelah itu enter           1
i=2 cetak j=1,2 maka cetak setelah itu enter   12
i=3 j=1,2,3 maka cetak setelah itu enter       123  -->

<!-- segita urut -->
<!-- i=1 j=1 cetak n sampai angka j=1 maka cetak setelah itu enter        1
i=2 j=2 cetak n sampai angka j=2,3 maka cetak setelah itu enter          2,3 -->
<!-- i=3 j=3 cetak n sampai angka j=3,4,5 maka cetak setelah itu enter        3,4,5 -->
