<?php

require 'connectToDB.php';

if (isset($_GET['index'])) {

    $index = intval($_GET['index']);

    $cars->deleteCar($index);

    header('Location: ../viewSQL/index.php');
    exit();

} else {
    echo "Car index is missing.";
}