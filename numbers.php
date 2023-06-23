<?php

$sayi1=15;
$sayi2=10.5;

echo "sonuc= ".($sayi1+$sayi2)."<br>";
echo "sonuc= ".($sayi1-$sayi2)."<br>";
echo "sonuc= ".($sayi1/$sayi2)."<br>";
echo "sonuc= ".($sayi1*$sayi2)."<br>";

echo var_dump(is_int($sayi2))."<br>";
echo var_dump(is_int($sayi1))."<br>";
echo var_dump(is_numeric("a0"))."<br>";

echo ceil(4.3)."<br>";
echo floor(4.3)."<br>";

echo round(4.4)."<br>";

echo sqrt(25)."<br>";
echo abs(-25.)."<br>";

?>