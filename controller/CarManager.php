<?php

require '../model/car.php';

class Cars {
    private $carsFile;
    private $carsArray;

    public function __construct($carsFile) {
        $this->carsFile = $carsFile;
        if (file_exists($this->carsFile)) {
            $contents = file_get_contents($this->carsFile);
            $this->carsArray = json_decode($contents, true);
            if ($this->carsArray === null) {
                $this->carsArray = [];
            }
        } else {
            $this->carsArray = [];
        }
    }
    public function getCars() {
        return $this->carsArray;
    }
    
    public function addCar($car) {
        $errors = $car->carErrors();
        if (!empty($errors)) {
            // Return errors instead of handling them here
            return $errors;
        }
        $car->setIndex($this->generateNewIndex());
        $new_car = [
            'model' => $car->getModel(),
            'year' => $car->getYear(),
            'price' => $car->getPrice(),
            'imgSrc' => $car->getImgSrc(),
            'index' => $car->getIndex()
        ];
        $this->carsArray[] = $new_car;
        $this->saveCars();
        header('Location: ../view/index.php');
        exit;
    }
    

    public function modifyCar($index, $updatedCar) {
        if (isset($this->carsArray[$index])) {
            $this->carsArray[$index] = $updatedCar;

            $this->saveCars();
        } 
        
        else {
            echo "Car not found.";
        }
    }

    public function deleteCar($index) {
        if (isset($this->carsArray[$index])) {
            array_splice($this->carsArray, $index, 1);
            $this->reIndexCars();
            $this->saveCars();
            echo "Car deleted successfully!";
        } else {
            echo "Car not found.";
        }
    }

    private function saveCars() {
        $json_data = json_encode($this->carsArray, JSON_PRETTY_PRINT);
        if (file_put_contents($this->carsFile, $json_data) === false) {
            echo "Error writing to JSON file.";
        }
    }

    private function generateNewIndex() {
        return count($this->carsArray);
    }

    private function reIndexCars() {
        foreach ($this->carsArray as $index => &$car) {
            $car['index'] = $index;
        }
    }
}


