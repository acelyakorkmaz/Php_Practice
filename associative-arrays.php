<?php

//key-value vsonuca ulaşmak için gerekli olan bir anahtar bilgi
//41=>Kocaeli

$plakalar = ["41", "53", "34", "61"];
$plakalar = ["Kocaeli", "Rize", "İstanbul", "Trabzon"];

$plakaBilgileri = [
    "41" => "Kocaeli",
    "53" => "Rize",
    "34" => "İstanbul",
    "61" => "Trabzon"

];

echo $plakaBilgileri["41"] . "<br>";

$telefonRehberi = [
    "ali" => "73628",
    "ayşe" => "466"
];

echo $telefonRehberi["ayşe"] . "<br>";

$urun = [
    "urunAdi" => "Iphone 14 ",
    "fiyat" => "35000",
    "satistaMi" => true
];
echo $urun["urunAdi"] . " " . $urun["fiyat"] . "<br>";

$urunler = [
    [
        "urunAdi" => "Iphone 14 ",
        "fiyat" => "35000",
        "satistaMi" => true
    ],
    [
        "urunAdi" => "Iphone 15 ",
        "fiyat" => "36000",
        "satistaMi" => true
    ],
    [
        "urunAdi" => "Iphone 16 ",
        "fiyat" => "37000",
        "satistaMi" => true
    ]
];

echo $urunler[0]["urunAdi"] . "<br>";
echo $urunler[1]["fiyat"] . "<br>";
echo $urunler[2]["urunAdi"] . " " . $urunler[2]["fiyat"] . "<br>";
echo $urunler[2]["urunAdi"] . " " . $urunler[2]["fiyat"] . "<br>";

?>