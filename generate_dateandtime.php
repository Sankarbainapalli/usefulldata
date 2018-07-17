<?php 

$indiatimezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($indiatimezone);
$dtindnew=$date->format( 'd-m-Y' );
$crdate=$date->format( 'Y-m-d' );
echo "<br>";
$crtime=$date->format( 'H:i:s' );
?>