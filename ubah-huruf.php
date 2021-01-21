<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf</title>
</head>
<body>
<?php
function ubah_huruf($string){
    $huruf = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l'
    , 'm', 'n', 'o', 'p', 'q', 'r', 's', 't','u', 'v', 'w', 'x', 'y', 'z'];
    $kosong = " ";

    if(!is_string($string)){
        return "Silahkan masukan String";
    }

    else{
        foreach(str_split($string) as $str){
            for($i=0; $i < count($huruf); $i++ ){
                if (strtolower($str) == $huruf[$i]){
                    $kosong .= $huruf [$i+1];
                }
            }
        }
        return $kosong . "<br>";
    }
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
</body>
</html>