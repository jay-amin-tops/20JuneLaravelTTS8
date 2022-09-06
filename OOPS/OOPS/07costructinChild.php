<?php

use ExampleOfConst as GlobalExampleOfConst;

class ExampleOfConst{
    public function ExampleOfConst() {
        echo $this->Someval;
    }
    public function __construct() {
       echo $this->Someval = "Parent Const Database";
    }
    public function __destruct(){
        $this->Someval = null;
        echo $this->Someval;
        echo "dest val";
    }
    public function ExampleOfConstAfterDes() {
        echo $this->Someval;
    }
}
class ExampleOfConstSecondClass extends GlobalExampleOfConst{
    
    public function __construct() {
        // Explicit const calling in child class 
        parent::__construct();
        echo $this->Someval = "<br>Child construct time pass";
    }
    // public function __destruct(){
    //     $this;
    // }
   
}


$ExampleOfConst = new ExampleOfConstSecondClass;
?>