<?php

$redis = new Redis();

$redis->connect('192.168.99.100', 6379); 

$redis->incr('sayac'); /* sayac arttirmaca */

var_dump($redis);

$sayac = $redis->get('sayac');

echo "sayac: ". $redis->get('sayac');

?>