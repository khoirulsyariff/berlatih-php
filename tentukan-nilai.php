<?php
function tentukan_nilai($number)
{
   if ($number >= 85 && $number <=100) {
       echo "Sangat Baik";
   }
   else if ($number >= 70 && $number < 85){
       echo "<br> Baik";
   }
   else if ($number >= 60 && $number < 70){
       echo "<br> Cukup";
   }
   else if ($number < 60 && $number >= 0){
       echo "<br> Kurang";
   }
   else {
       echo "<br> Input yang dimasukkan Salah";
       echo "<br> Masukkan Input 0 - 100";
   }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
