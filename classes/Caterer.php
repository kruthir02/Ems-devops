<?php
class Caterer {
    private $FoodStyle;    
    private $CateringCost;
    private $CateringName;
  
    
    public function __construct($id, $FoodStyle, $CateringCost, $CateringName) {
        $this->id = $id;
        $this->FoodStyle = $FoodStyle;
        $this->CateringCost = $CateringCost;
        $this->CateringName = $CateringName;
        
    }
    
    public function getId() { return $this->id; }
    public function getFoodStyle() { return $this->FoodStyle; }
    public function getCateringCost() { return $this->CateringCost; }
    public function getCateringName() { return $this->CateringName; }
 
}
?>