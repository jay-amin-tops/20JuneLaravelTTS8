<?php

class myClass{
    public function __get($firstarg){
        echo "<br>called __get <br>";
        print_r($firstarg);
        echo "<br>";
    }
    public function __set($var,$val){
        echo "<br>called __set <br>";
        echo "variable name:".$var;
        echo "<br>";
        echo "variable value:".$val;
        echo "<br>";
    }
    public function __call($name, $arguments){   
        echo "<br>";
        echo "Function name: ".$name;
        echo "<br>Function Arguments: ";
        print_r($arguments);
        echo "<br>";
    }
}

$myClass = new myClass;
echo "<br>";
echo $myClass->checking;
echo "<br>";
echo $myClass->bhavya;
echo "<br>";
echo $myClass->name="vipul";
echo "<br>";
echo $myClass->name="aashish";
echo "<br>";
echo $myClass->Testing();
echo "<br>";
echo $myClass->Testing(50,55);
echo $myClass->shahil("PHP","HTML","CSS");


?>