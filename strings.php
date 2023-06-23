<?php
$urunAdi ="Iphone 14";
$urunFiyat=30000;
$urunKdvOrani=0.18;

$urunFiyat=$urunFiyat+($urunFiyat*$urunKdvOrani);
// $sonuc=$urunAdi." isimli ürün fiyatı ".$urunFiyat;
$sonuc="{$urunAdi} isimli ürün fiyatı {$urunFiyat} ";


echo $sonuc."<br>";
echo $sonuc[0]."<br>";
echo $sonuc[25]."<br>";

//string fonksiyonları

echo strlen($sonuc)."<br>";
echo strtolower($sonuc)."<br>";
echo strtoupper($sonuc)."<br>";
echo str_word_count($sonuc)."<br>";

 


?>