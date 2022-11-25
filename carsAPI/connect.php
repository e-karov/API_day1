<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db_name = "cars";

try {
    $connection = mysqli_connect($servername, $user, $pass, $db_name);
} catch (Exception $err) {
    echo "Connection failure: {$err}";
}
