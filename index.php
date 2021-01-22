<?php
    require_once('animal.php');
    require_once('frog.php');
    require_once('ape.php');

    $sheep = new animal ("shaun");
    echo "Animal Name : $sheep->name <br>";
    echo "Animal Legs : $sheep->legs <br>";
    echo "Cold Blood : $sheep->cold_blood <br><br>";

    $kodok = new frog ("Buduk");
    echo "Animal Name : $kodok->name <br>";
    echo "Animal Legs : $kodok->legs <br>";
    echo "Cold Blood : $kodok->cold_blood <br>";
    echo $kodok->jump();
    echo "<br><br>";

    $sungokong = new Ape ("Kera Sakti");
    echo "Animal Name : $sungokong->name <br>";
    echo "Animal Legs : $sungokong->legs <br>";
    echo "Cold Blood : $sungokong->cold_blood <br>";
    echo $sungokong->yell();
?>