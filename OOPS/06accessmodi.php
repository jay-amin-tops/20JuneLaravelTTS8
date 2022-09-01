<?php
class AccessModi{
    // $Author = "Chetanbhai bhagat";
    public $Author = "Chetanbhai bhagat"; // we can access it selfs child and out side too
    private $privateAccessModi = "private Access Modi"; // we can access within Class only
    protected $protectedAccessModi = "protected Access Modi"; // we can access within Class and child only
    public function TwoStates(){
        echo "Story of TwoStates ".$this->Author;
    }
    public function ThreeIdiots(){
        echo $this->privateAccessModi;
        echo "Story of ThreeIdiots ".$this->Author;
    }
    public function FunctionforPrint(){
        echo "Story of ThreeIdiots ".$this->Author;
    }
}
class ChildClass extends AccessModi{
    public function AccessPrivateProtectedDMOfParent(){
        // echo $this->privateAccessModi; //Undefined property: ChildClass::$privateAccessModi in
        echo "<br>";
        echo $this->protectedAccessModi;
    }
    public function ThreeIdiots2(){
        echo "Story of ThreeIdiots ".$this->Author;
    }
    public function FunctionforPrint(){
        echo "Story of ThreeIdiots ".$this->Author;
    }
}
$oo = new ChildClass;
echo $oo->ThreeIdiots();
// echo $oo->Author;
// echo "<br>";
// echo $oo->privateAccessModi; //Cannot access private property AccessModi::$privateAccessModi in
// echo "<br>";
// echo $oo->protectedAccessModi; //Cannot access protected property AccessModi::$protectedAccessModi in
// echo "<br>";
// $oo->TwoStates();
?>