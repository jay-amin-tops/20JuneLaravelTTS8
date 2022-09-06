<?php

abstract class FinalExample{
    abstract public function NewFunctionName();
    abstract public function NewFunctionName12();
    // abstract public function FunctionName(); //Class FinalExample contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
    // abstract public function FunctionName(){ //Abstract function FinalExample::FunctionName() cannot contain body in
    //     echo "called";
    // }
}
class ChildForAbstraction extends FinalExample{
    public function NewFunctionName(){
        echo "called FunctionName";
    }
    public function NewFunctionName12(){
        echo "called FunctionName";
    }
    // abstract public function FunctionName(); //Class FinalExample contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
    // abstract public function FunctionName(){ //Abstract function FinalExample::FunctionName() cannot contain body in
    //     echo "called";
    // }
}
$FinalExample = new ChildForAbstraction; //Cannot instantiate abstract class FinalExample
$FinalExample->NewFunctionName();
