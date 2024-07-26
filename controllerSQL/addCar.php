<?php

require 'connectToDB.php'; //returns $cars

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $car = new Car($model, $year, $price, $img, null);

    $errors = $cars->addCar($car);

    if (!empty($errors)) {
        // Store errors in session to display on the form
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['formData'] = $_POST;
        header('Location: ../viewSQL/addCar.php');
        exit;
    }

    header('Location: ../viewSQL/index.php');
    exit;
}
