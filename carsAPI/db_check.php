<?php
require_once("connect.php");

$sql = "SELECT * FROM car";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $resultArr = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $name = @$row['name'] ?: null;
        $price = @$row['price'] ?: null;
        $picture = @$row['picture'] ?: null;
        array_push($resultArr, $row);
    }
}
mysqli_close($connection);
