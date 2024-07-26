<?php

$filename = 'cars.json';
function getCarsFromJson($filename) { //takes json and returns array
    $jsonString = file_get_contents($filename);
    return json_decode($jsonString, true); 
}

function createCarSection($car, $index) {// creates html for each car
    $html = '<div class="car-item">';
    $html .= '<button class="remove-button" onclick="location.href=\'../controller/deleteCar.php?index=' . $index . '\'">Remove car</button>'; 
    $html .= '<button class="modify-button" onclick="location.href=\'../view/modifyForm.php?index=' . $index . '\'">Modify car</button>'; 
    $html .= '<h1 class="model">' . $car['model'] . '</h1>';
    $html .= '<img class="car-img" src="' . $car['imgSrc'] . '" alt="' . $car['model'] . '">';
    $html .= '<p class="year">year: ' . $car['year'] . '</p>';
    $html .= '<p class="price">price: ' . $car['price'] . '$</p>';
    $html .= '</div>';
    return $html;
}

function displayCarData($cars) { //displays all cars
    echo '<ul class="cars-container">';
    foreach ($cars as $index => $car) {
        echo '<li>' . createCarSection($car, $index) . '</li>';
    }
    echo '</ul>';
}


// transform loadCars.php to js and ajax