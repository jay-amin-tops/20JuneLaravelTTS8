<?php

class myClass{
    public function somemethod(otherclass $otherClassObj,otherclass1 $otherClass1){   
        echo "test";   
        echo $otherClassObj->FunctionName(array("a"));
        echo $otherClass1->FunctionName1();
    }
}
class otherclass {
    public function FunctionName(array $input_array){
        return "somedata";
    }
    public function FunctionName1(){
        return "somedata";
    }
}
class otherclass1 {
    public function FunctionName(array $input_array){
        return "somedata";
    }
    public function FunctionName1(){
        return "otherclass1 somedata";
    }
}
$myClass = new myClass;
$otherClassObj = new Otherclass;
$otherClass1 = new otherclass1;
echo $myClass->somemethod($otherClassObj,$otherClass1);
