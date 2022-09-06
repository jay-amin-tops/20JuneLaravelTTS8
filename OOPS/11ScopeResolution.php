<?php
class FinalExample{
    public static $parentDM = "Parent DataMember";
    public function __construct(){
        echo "<br>"; 
        echo self::$parentDM; 
        echo "<br>"; 
        echo "Parent __construct called";
        echo "<br>"; 
    }
}
class FinalExampleChild extends FinalExample{ 
    public static $childDM = "Child DataMember";
    public function __construct(){
        echo "<br>"; 
        echo "Parent DM With self keyword calling in child : ".self::$parentDM; 
        echo "<br>"; 
        echo "Parent DM With parent keyword calling in child : ".parent::$parentDM; 
        echo "<br>"; 
        parent::__construct();
        echo "<br>"; 
        echo "Child __construct called";
        echo "<br>"; 
    }
    public static function FunctionName(){ 
        echo "called";
    }
    
}
$FinalExample = new FinalExampleChild;
// $FinalExample->FunctionName();
FinalExampleChild::FunctionName();
