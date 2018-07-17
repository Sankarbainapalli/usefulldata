<?php

$m=date('m');
$d=date('d');
$y=date('y');
// $C="C00";
$getid=mysqli_query($con," SELECT * FROM registration_tb ");
$getpaid=mysqli_num_rows($getid);
$invalid = str_pad ($getpaid,2,0, STR_PAD_LEFT);
$patient_id=$d.$m.$y.$invalid;

$branch_id=mt_rand(100000,999999);

?>