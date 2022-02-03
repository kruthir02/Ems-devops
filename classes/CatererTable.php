<?php
require_once 'Caterer.php';

class CatererTable {

    private $connect;
    
    public function __construct($c) {
        $this->connect = $c;
    }
    
    // execute a query to get all locations
    public function getCaterers() {
        $sqlQuery = "SELECT * FROM caterer";
        
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("Could not retrieve caterer details");
        }
        
        return $statement;
    }
    
    // execute a query to get a location with the specified id
    public function getCaterersById($id) {
        $sqlQuery = "SELECT * FROM caterer WHERE CatererID = :id";
        
        $statement = $this->connect->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not retrieve caterer ID");
        }
        
        return $statement;
    }
    
    //execute a insert sql statement that inserts data taken from user to a database.
    public function insert($p) {
        $sql = "INSERT INTO caterer(foodstyle, cateringcost, cateringname) " .
                "VALUES (:FoodStyle, :CateringCost, :CateringName)";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "FoodStyle"         => $p->getFoodStyle(),
            "CateringCost"      => $p->getCateringcost(),            
            "CateringName"      => $p->getCateringName(),
          
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        
        if (!$status) {
            die("Could not insert caterer");
        }
        
        $id = $this->connect->lastInsertId();
        
        return $id;
    }
    
    public function update($p) {
        
        $sql = "UPDATE caterer SET " .
                "FoodStyle = :FoodStyle, " . 
                "CateringCost = :CateringCost, " .                
                "CateringName = :CateringName, " .
                
                " WHERE CatererID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "FoodStyle"         => $p->getFoodStyle(),
            "CateringCost"      => $p->getCateringcost(),            
            "CateringName"      => $p->getCateringName(),
            
            "id"                => $p->getId()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        print_r($statement);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not update caterer details");
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM caterer WHERE CatererID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "id" => $id
        );
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not delete caterer");
        }
    }    

}