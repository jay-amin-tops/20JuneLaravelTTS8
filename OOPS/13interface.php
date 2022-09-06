<?php

interface FinalExample{
    public function NewFunctionName();
    public function NewFunctionName12();
}
interface FinalExample1{
    public function NewFunctionName2();
    public function NewFunctionName122();
}
class ChildForAbstraction implements FinalExample,FinalExample1{
    public function NewFunctionName(){
        echo "called FunctionName";
    }
    public function NewFunctionName12(){
        echo "called FunctionName";
    }
    public function NewFunctionName2(){
        echo "called FunctionName";
    }
    public function NewFunctionName122(){
        echo "called FunctionName";
    }
    // abstract public function FunctionName(); //Class FinalExample contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
    // abstract public function FunctionName(){ //Abstract function FinalExample::FunctionName() cannot contain body in
    //     echo "called";
    // }
}
$FinalExample = new ChildForAbstraction; //Cannot instantiate abstract class FinalExample
$FinalExample->NewFunctionName();
