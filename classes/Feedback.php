<?php
class Feedback {
    private $Username;    
    private $Rev;
    private $Comment;
    
    public function __construct($id, $Username, $Rev, $Comment) {
        $this->id = $id;
        $this->Username = $Username;
        $this->Rev = $Rev;
        $this->Comment = $Comment;
    }
    
    public function getId() { return $this->id; }
    public function getUsername() { return $this->Username; }
    public function getRev() { return $this->Rev; }
    public function getComment() { return $this->Comment; }
}
?>