<?php
require_once("connect.php");

$sql = "SELECT * FROM car";

$result = mysqli_query($connection, $sql);


$data = mysqli_fetch_all($result);

// $name = @$row['name'] ?: null;
// $price = @$row['price'] ?: null;
// $picture = @$row['picture'] ?: null;

mysqli_close($connection);
