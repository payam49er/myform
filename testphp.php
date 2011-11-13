<?php

$now = new DateTime();
$loc = new DateTimeZone('Europe/London');
$now->setTimezone($loc);
echo $now->format('g.i A');



      
?>


