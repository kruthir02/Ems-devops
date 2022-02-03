<?php
require_once 'Booking.php';

class BookingTable {

    private $connect;
    
    public function __construct($c) {
        $this->connect = $c;
    }
    
    // execute a query to get all locations
    public function getBookings() {
        $sqlQuery = "SELECT * FROM booking";
        
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("Could not retrieve booking details");
        }
        
        return $statement;
    }
    
    // execute a query to get a location with the specified id
    public function getBookingsById($id) {
        $sqlQuery = "SELECT * FROM booking WHERE BookingID = :id";
        
        $statement = $this->connect->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not retrieve booking ID");
        }
        
        return $statement;
    }
    
    //execute a insert sql statement that inserts data taken from user to a database.
    public function insert($p) {
        $sql = "INSERT INTO booking(fullname, username, email, events, venue, eventdate, noofheads, decoration, foodstyle) " .
                "VALUES (:FullName, :Username, :Email, :Events, :Venue, :EventDate, :NoOfHeads, :Decoration, :FoodStyle)";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "FullName"    => $p->getFullName(),
            "Username"    => $p->getUsername(),            
            "Email"       => $p->getEmail(),
            "Events"      => $p->getEvents(),
            "Venue"       => $p->getVenue(),
            "EventDate"   => $p->getEventDate(),
            "NoOfHeads"   => $p->getNoOfHeads(),
            "Decoration"   => $p->getDecoration(),
            "FoodStyle"   => $p->getFoodStyle()

        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        
        if (!$status) {
            die("Could not insert booking");
        }
        
        $id = $this->connect->lastInsertId();
        
        return $id;
    }
    
    public function update($p) {
        
        $sql = "UPDATE booking SET " .
                "FullName = :FullName, " . 
                "Username = :Username, " .                
                "Email = :Email, " .
                "Events = :Events, " .
                "Venue = :Venue, " .
                "EventDate = :EventDate, " .
                "NoOfHeads = :NoOfHeads, " .
                "Decoration = :Decoration, " .
                "FoodStyle = :FoodStyle, " .
                " WHERE BookingID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "FullName"    => $p->getFullName(),
            "Username"    => $p->getUsername(),            
            "Email"       => $p->getEmail(),
            "Events"      => $p->getEvents(),
            "Venue"       => $p->getVenue(),
            "EventDate"   => $p->getEventDate(),
            "NoOfHeads"   => $p->getNoOfHeads(),
            "Decoration"   => $p->getDecoration(),
            "FoodStyle"   => $p->getFoodStyle(),
            "id"                => $p->getId()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        print_r($statement);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not update booking details");
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM booking WHERE BookingID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "id" => $id
        );
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not delete booking");
        }
    }    

}