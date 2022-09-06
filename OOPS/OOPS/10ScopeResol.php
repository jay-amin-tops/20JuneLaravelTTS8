<?php

class MyClass{
    // public $Data = "Test"; //cnt access
    public static $Data = "Test"; // we cn access out side of class with ::
    const DataConst = "Test"; 
}

echo MyClass::$Data;
echo "<br>";
echo MyClass::DataConst;

?>