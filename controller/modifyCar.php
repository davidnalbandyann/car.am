<?php
require 'CarManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['index']) && isset($_POST['model']) && isset($_POST['year']) && isset($_POST['price']) && isset($_POST['img'])) {

        $index = intval($_POST['index']);

        $updatedCar = [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'price' => $_POST['price'],
            'imgSrc' => $_POST['img']
        ];
        
        $cars = new Cars('../cars.json');

        $cars->modifyCar($index, $updatedCar); 

        header('Location: ../view/index.php');
        exit(); 

    } else {
        echo "Required POST data is missing.";
    }
} else {
    echo "Invalid request method.";
}