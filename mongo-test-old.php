<pre><?php

// composer kullanmadan mongodb testi ama eski. resmi dökümanı bulamadım.

if (extension_loaded('MongoDB')) {
    echo 'MongoDB kurulu.';
} else {
    echo 'MongoDB kurulu değil.';
}

$baglanti = new MongoDB\Driver\Manager('mongodb://root:root@mongo:27017/');


$veri = new MongoDB\Driver\BulkWrite();
$veri->insert(['adi' => 'Yusuf', 'soyadi' => 'SEZER']);

$sonuc = $baglanti->executeBulkWrite('deneme.koleksiyon', $veri);
var_dump($sonuc);

