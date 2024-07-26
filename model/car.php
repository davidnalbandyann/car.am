<?php

class Car {
    private $model;
    private $year;
    private $price;
    private $imgSrc;
    private $index;

    public function __construct($model, $year, $price, $imgSrc, $index) {
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
        $this->imgSrc = $imgSrc;
        $this->index = $index;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImgSrc() {
        return $this->imgSrc;
    }

    public function getIndex() {
        return $this->index;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setImgSrc($imgSrc) {
        $this->imgSrc = $imgSrc;
    }

    public function setIndex($index) {
        $this->index = $index;
    }

    //function to validate the model. returns an array of errors
    function validateModel() {
        $model_errors = [];
        if (!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $this->model)) {
            $model_errors[] = "Invalid model name.";
        }
        return $model_errors;
    }

    //function to validate the year. returns an array of errors
    function validateYear() {
        $year_errors = [];
        if (!preg_match('/^[0-9]+$/', $this->year)) {
            $year_errors[] = "Invalid year.";
        }
        if ($this->year < 1970 || $this->year > 2024) {
            $year_errors[] = "Year must be between 1970 and 2024.";
        }
        return $year_errors;
    }

    //function to validate the price. returns an array of errors
    function validatePrice() {
        $price_errors = [];
        if (!preg_match('/^[0-9]+$/', $this->price)) {
            $price_errors[] = "Invalid price.";
        }
        if ($this->price < 0) {
            $price_errors[] = "Price must be a positive number.";
        }

        return $price_errors;
    }

    //function to validate the img. returns an array of errors
    function validateImg() {
        $img_errors = [];
        if (!filter_var($this->imgSrc, FILTER_VALIDATE_URL)) {
            $img_errors[] = "Invalid URL.";
        }
        return $img_errors;
    }

    //function to collect errors from all validation functions
    function carErrors() {
        $model_errors = $this->validateModel();
        $year_errors = $this->validateYear();
        $price_errors = $this->validatePrice();
        $img_errors = $this->validateImg();
        $errors = array_merge($model_errors, $year_errors, $price_errors, $img_errors);
        return $errors;
    }
}
