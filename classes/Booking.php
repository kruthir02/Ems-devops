<?php
class Booking {
    private $FullName;    
    private $Username;
    private $Email;
    private $Events;
    private $Venue;
    private $EventDate;
    private $NoOfHeads;
    private $Decoration;
    private $FoodStyle;
    
    
    public function __construct($id, $FullName, $Username, $Email, $Events, $Venue, $EventDate, $NoOfHeads, $Decoration, $FoodStyle) {
        $this->id = $id;
        $this->FullName = $FullName;
        $this->Username = $Username;
        $this->Email = $Email;
        $this->Events = $Events;
        $this->Venue = $Venue;
        $this->EventDate = $EventDate;
        $this->NoOfHeads = $NoOfHeads;
        $this->Decoration = $Decoration;
        $this->FoodStyle = $FoodStyle;
    }
    
    public function getId() { return $this->id; }
    public function getFullName() { return $this->FullName; }
    public function getUsername() { return $this->Username; }
    public function getEmail() { return $this->Email; }
    public function getEvents() { return $this->Events; }
    public function getVenue() { return $this->Venue; }
    public function getEventDate() { return $this->EventDate; }
    public function getNoOfHeads() { return $this->NoOfHeads; }
    public function getDecoration() { return $this->Decoration; }
    public function getFoodStyle() { return $this->FoodStyle; }
}
?>