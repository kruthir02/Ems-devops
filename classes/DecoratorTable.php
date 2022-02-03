<?php
require_once 'Decorator.php';

class DecoratorTable {

    private $connect;
    
    public function __construct($c) {
        $this->connect = $c;
    }
    
    // execute a query to get all locations
    public function getDecorators() {
        $sqlQuery = "SELECT * FROM decorator";
        
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("Could not retrieve decorator details");
        }
        
        return $statement;
    }
    
    // execute a query to get a location with the specified id
    public function getDecoratorsById($id) {
        $sqlQuery = "SELECT * FROM decorator WHERE decoratorID = :id";
        
        $statement = $this->connect->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not retrieve decorator ID");
        }
        
        return $statement;
    }
    
    //execute a insert sql statement that inserts data taken from user to a database.
    public function insert($p) {
        $sql = "INSERT INTO decorator(DecorTheme, DecorCost, DecoratorName) " .
                "VALUES (:DecorTheme, :DecorCost, :DecoratorName)";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "DecorTheme"         => $p->getDecorTheme(),
            "DecorCost"          => $p->getDecorCost(),            
            "DecoratorName"      => $p->getDecoratorName()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        
        if (!$status) {
            die("Could not insert decorator");
        }
        
        $id = $this->connect->lastInsertId();
        
        return $id;
    }
    
    public function update($p) {
        
        $sql = "UPDATE decorator SET " .
                "DecorTheme = :DecorTheme, " . 
                "DecorCost = :DecorCost, " .                
                "DecoratorName = :DecoratorName, " .
                " WHERE DecoratorID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "DecorTheme"        => $p->getdecortheme(),
            "DecorCost"         => $p->getdecorcost(),            
            "DecoratorName"     => $p->getdecoratorname(),
            "id"                => $p->getId()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        print_r($statement);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not update decorator details");
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM decorator WHERE DecoratorID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "id" => $id
        );
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not delete decorator");
        }
    }    

}