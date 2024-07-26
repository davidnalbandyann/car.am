<?php

require '../vendor/autoload.php';

require 'smartyConfig.php';

session_start();

$errors = $_SESSION['errors'] ?? [];


$smarty->assign('errors', $errors);

$smarty->display('../templates/addCar.tpl');

session_unset();
