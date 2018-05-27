<?php

$time = strtotime($datefieldfromtablequery);
$newdate = date("jS F Y", $time);


echo $newdate;

?>
