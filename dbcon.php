<?php

$server = "localhost";
// $server = "https://databases.000webhost.com/";
$user = "id18753034_anand";
$password = "S3v%\/UFk2k}X^04";
$db = "id18753034_signup";


$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    echo "Not Connected ";
}
else{
    echo "Connection Succesfull ";
    }
?>