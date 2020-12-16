<?php
function tukar_besar_kecil($string)
{
    //kode di sini
    $Katanya = "";
    for ($i = 0; $i < strlen($string); $i++) {
        $kata = ord($string[$i]);
        if ($kata > 64 && $kata < 91) {
            $Katanya .= chr($kata + 32);
        } else if ($kata > 96 && $kata < 123) {
            $Katanya .= chr($kata - 32);
        } else {
            $Katanya .= $string[$i];
        }
    }
    echo "<br>";
    return $Katanya;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
