<?php

class myClass{
    // function Testing(){
    //     return "testing Simple";
    // }
    // function Testing($a,$b){ // Cannot redeclare myClass::Testing() in
    //     return "testing Simple";
    // }
    public function __call($name, $arguments){   
        echo "<br>";
        echo "Function name: ".$name;
        echo "<br>Function Arguments: ";
        print_r($arguments);
        echo "<br>";
    }
}

$myClass = new myClass;
echo $myClass->Testing();
echo $myClass->Testing(50,55);


?>