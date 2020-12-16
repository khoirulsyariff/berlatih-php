<?php
function ubah_huruf($string){
//kode di sini
    $string = strtolower($string);
    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $output = "";
    for ($i= 0; $i < strlen($string); $i++) {
        $posisition = strpos($abjad, $string[$i]);
        $output .= substr($abjad, $posisition+1, 1);
    }
    
    return $output . "<br>";
}


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>