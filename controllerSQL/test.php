<?php
require 'connectToDB.php';

$cars = $cars -> getCars();



foreach ($cars as $car) {


    // var_dump($car); echo "<br>";
    echo "Model: " . $car->getModel() . "<br>";
    echo "Year: " . $car->getYear() . "<br>";
    echo "Price: " . $car->getPrice() . "<br>";
    echo "Image: " . $car->getImgSrc() . "<br>";
    echo "ID: " . $car->getIndex() . "<br><br>";

    // echo get_class($car) . "<br>";
}
