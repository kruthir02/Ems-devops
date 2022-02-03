<?php
class Decorator {
    private $DecorTheme;    
    private $DecorCost;
    private $DecoratorName;
    
    public function __construct($id, $DecorTheme, $DecorCost, $DecoratorName) {
        $this->id = $id;
        $this->DecorTheme = $DecorTheme;
        $this->DecorCost = $DecorCost;
        $this->DecoratorName = $DecoratorName;
    }
    
    public function getId() { return $this->id; }
    public function getDecorTheme() { return $this->DecorTheme; }
    public function getDecorCost() { return $this->DecorCost; }
    public function getDecoratorName() { return $this->DecoratorName; }
}
?>