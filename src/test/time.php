<?php

$now = time();
$then = time()-(7*24*60*60)+(3*60*60)+(24*60)-(24);

echo $now . "<br>" . $then . "<br>";
require('../php/btdb-functions.php');

$time = elapsedTime($then, $now);

echo $time["days"] . "<br>";
echo date('Y-m-d h:i:s',time());

?>
