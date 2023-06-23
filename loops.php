<?php
//FOR

// for ($i = 0; $i <= 100; $i += 2) {
//     if ($i % 3 == 0) {
//         echo $i . "<br>";
//     }

// }

// $isimler=["ali","ahmet","ayşe"];
// for ($i=0; $i <(count($isimler)); $i++) { 
//     echo $isimler[$i]."<br>";
// }

$urunler = [
    ["Iphone 14", 40000],
    ["Iphone 15", 50000],
    ["Iphone 16", 60000]
];
// for ($i = 0; $i < (count($urunler)); $i++) {
//     echo $urunler[$i][0]." ".$urunler[$i][1] . "<br>";
// }

//FOREACH

foreach ($urunler as $urun ) {
    echo $urun[0] . " " . $urun[1] . "<br>";
}
?>