<?php
require_once 'Feedback.php';

class FeedbackTable {

    private $connect;
    
    public function __construct($c) {
        $this->connect = $c;
    }
    
    // execute a query to get all locations
    public function getFeedback() {
        $sqlQuery = "SELECT * FROM feedback";
        
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("Could not retrieve feedback details");
        }
        
        return $statement;
    }
    
    // execute a query to get a location with the specified id
    public function getFeedbackById($id) {
        $sqlQuery = "SELECT * FROM feedback WHERE id = :id";
        
        $statement = $this->connect->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not retrieve feedback ID");
        }
        
        return $statement;
    }
    
    //execute a insert sql statement that inserts data taken from user to a database.
    public function insert($p) {
        $sql = "INSERT INTO feedback(Username, Rev, Comment) " .
                "VALUES (:Username, :Rev, :Comment)";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "Username"         => $p->getUsername(),
            "Rev"          => $p->getRev(),            
            "Comment"      => $p->getComment()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        
        if (!$status) {
            die("Could not insert feedback");
        }
        
        $id = $this->connect->lastInsertId();
        
        return $id;
    }
    
    public function update($p) {
        
        $sql = "UPDATE feedback SET " .
                "Username = :Username, " . 
                "Rev = :Rev, " .                
                "Comment = :Rev, " .
                " WHERE id = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "Username"         => $p->getUsername(),
            "Rev"          => $p->getRev(),            
            "Comment"      => $p->getComment(),
            "id"                => $p->getId()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        print_r($statement);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not update feedback details");
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM feedback WHERE id = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "id" => $id
        );
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not delete feedback");
        }
    }    

}