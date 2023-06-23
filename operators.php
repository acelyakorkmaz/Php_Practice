<?php
//aritmetik




$a = 10;
$b = 2;

// echo $a + $b . "<br>";
// echo $a - $b . "<br>";
// echo $a * $b . "<br>";
// echo $a / $b . "<br>";

// echo  $a**$b ."<br>";
// echo $a++."<br>";
// echo $a."<br>";

//atama

// $a=$a+$b;
// $a+=$b;
// $a-=$b;
// $a*=$b;
// $a/=$b;
// echo $a;

//karşılaştırma
// $sonuc=($a==$b);
// $sonuc=($a!=$b);
// $sonuc=($a>$b);
// $sonuc=($a<$b);
// echo var_dump($sonuc);

//mantıksal
$yas=10;
$mezuniyet="lise";
$sonuc=($yas>=18);

// echo var_dump(($mezuniyet=="lise"))."<br>";
// echo var_dump(($yas=20)&&($mezuniyet=="üni"));

if ($yas>=20&&$mezuniyet="lise") {
   echo "Ehliyet alabilirsiniz";
}
else {
    echo "Ehliyet alamazsınız";
}
?>