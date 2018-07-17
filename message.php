<?php
$username="epione";
$password="akki@123";
$from = "EPIONE";
$to = "$mobilenumber"; // A single number or a comma-seperated list of numbers
$message = "Dear $name\nWe have recieved your payment of Rs.$amount \nRegards\nTeam \nDarapain solutions";
$message = urlencode($message);
$vars="username=".$username."&password=".$password."&message=".$message."&selectdnums=".$to."&from=".$from."&to=".$to."&info=1&test=0";
// $ch = curl_init('http://api.textlocal.in/send/?');
$ch=curl_init('http://www.onlinebulksmslogin.com/spanelv2/api.php?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);
