<?php 

require '../model/car.php';


// db columns are CarID, Model, Year, Price, image

class CarManager  
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    
    public function getCarByID($id){
        $query = "SELECT * FROM carInfo WHERE CarID = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $car = $result->fetch_assoc();
        $stmt->close();

        $car = new Car(
            $car['Model'],     
            $car['Year'],      
            $car['Price'],      
            $car['image'],
            $car['CarID']     
        );

        return $car;
    }

    public function addCar($car)
    {
        $errors = $car->carErrors();

        if (!empty($errors)) {
            // Return errors instead of handling them here
            return $errors;
        }
        
        if (empty($errors)) {
            $query = "INSERT INTO carInfo (model, year, price, image) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('siss', $car->getModel(), $car->getYear(), $car->getPrice(), $car->getImgSrc());
            $stmt->execute();
            $stmt->close();
        }
        return $errors;
    }
    public function getCars()
{
    $query = "SELECT * FROM carInfo";
    $result = $this->db->query($query);

    if (!$result) {
        die("Query failed: " . $this->db->error);
    }

    $cars = [];
    while ($row = $result->fetch_assoc()) {

        $car = new Car(
            $row['Model'],     
            $row['Year'],      
            $row['Price'],      
            $row['image'],
            $row['CarID']     
        );
        $cars[] = $car;
    }
    return $cars;
}


    public function modifyCar($index, $updatedCar)
    {
        $query = "UPDATE carInfo SET Model = ?, Year = ?, Price = ?, Image = ? WHERE CarId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sissi', $updatedCar['model'], $updatedCar['year'], $updatedCar['price'], $updatedCar['imgSrc'], $index);
        $stmt->execute();
        $stmt->close();
    }
    public function deleteCar($index)
    {
        $query = "DELETE FROM carInfo WHERE CarId = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $index);
        $stmt->execute();
        $stmt->close();
    }   

}