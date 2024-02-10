<?php

$server = "sql213.infinityfree.com";
$username = "if0_35955414";
$password = "xTOfGsHMxDrRN";
$database = "if0_35955414_bluebirdhotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
/*
$server = "sql204.infinityfree.com";
$username = "	if0_35942069";
$password = "appl2hIlL7KbSPG";
$database = "if0_35942069_bluebirdhotel";

*/
?>
