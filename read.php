<?php 

$baglanti = new MongoDB\Driver\Manager('mongodb://localhost:27017');

$sorgu = new MongoDB\Driver\Query([]);
$sonuc = $baglanti->executeQuery('deneme.koleksiyon', $sorgu);

foreach ($sonuc as $satir) {
    echo $satir->adi . ' ' . $satir->soyadi;
    echo '<br />';
}