<?php

$redis = new Redis();

$redis->connect('redis', 6379); 

$redis->incr('sayac'); /* sayac arttirmaca */

var_dump($redis);

echo "sayac: ". $redis->get('sayac');

?>