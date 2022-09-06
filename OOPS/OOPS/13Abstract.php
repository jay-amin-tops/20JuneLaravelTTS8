<?php


abstract class testClass{
    public static function FunctionName(){
        echo "Called";
    }
    public function FunctionNameSimpleMethod(){
        echo "Called";
    }
    abstract public function FunctionNameAbsMethod();
}

class ChildClass extends testClass{
    public static function ChildFunctionName(){
        echo "Called";
        // $this->FunctionNameSimple(); //Using $this when not in object context in
    }
    public function FunctionNameAbsMethod(){
        echo "called";
    }
}

// $testClass = new testClass; rule 1 :we cnt create an object of abs class
testClass::FunctionName();
$ChildClass = new ChildClass;
$ChildClass->ChildFunctionName()
?>
