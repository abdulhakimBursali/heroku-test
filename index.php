<?php

$baglanti = new MongoDB\Driver\Manager('mongodb://localhost:27017');



if(isset($_GET['param'])){
    print_r($_GET);

    echo "<hr>";

    foreach ($_GET as $value) {
        echo $value . "<br/>";
    }
}


$veri = new MongoDB\Driver\BulkWrite();
$veri->insert($_GET);

$sonuc = $baglanti->executeBulkWrite('deneme.v1', $veri);
var_dump($sonuc);

?>