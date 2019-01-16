<?php

//$datefieldfromtablequery is the variable that would be a row connected to the database
$time = strtotime($datefieldfromtablequery);
$newdate = date("jS F Y", $time);


echo $newdate;

?>
