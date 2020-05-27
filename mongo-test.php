<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client('mongodb://root:root@192.168.99.100:27017/');
$db = $client->selectDatabase("deneme");
$collection = $db->selectCollection("koleksiyon");

$sayac = $collection->findOne( [ '_id' => 'sayac' ] );
// var_dump($sayac);
if (!$sayac) {
    $collection->insertOne(['_id' => 'sayac', 'say' => 0], ['ordered' => false]);
}
$collection->updateOne([ '_id' => 'sayac' ], ['$inc' => ['say' => 1]]);  // sayacin sayini 1 arttir

// echo "<pre>";
// var_dump($sayac);

echo "<b>mongodb sayac: </b>". $sayac->say;