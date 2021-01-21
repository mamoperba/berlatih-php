<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar Huruf Besar ke Kecil</title>
</head>
<body>
<?php
function tukar_besar_kecil($string){
    $huruf = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l'
    , 'm', 'n', 'o', 'p', 'q', 'r', 's', 't','u', 'v', 'w', 'x', 'y', 'z', '0', '1', '-'];
    $kosong = " ";

    foreach(str_split($string) as $str){
        if(ctype_lower($str)){
            $kosong .= strtoupper ($str);
        }elseif(ctype_upper($str)){
            $kosong .= strtolower ($str);
        }
    }
    return $kosong . "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
</body>
</html>