<?php

use myClass as GlobalMyClass;

class myClass{
    public $PublicDM = "This is the Example of public DM";
    protected $protectedDM = "This is the Example of protected DM";
    private $privateDM = "This is the Example of private DM";
    final public function somemethod(){   
        "test";   
    }
}
class otherclass extends GlobalMyClass{ //: Class otherclass may not inherit from final class (
    // public function somemethod(){   
    //     foreach ($this as $key => $value) {
    //         echo "<br>Key is :".$key."<br>";
    //         echo "<br>val is :".$value."<br>";
    //     }      
    // }
}
$myClass = new otherclass;
echo $myClass->somemethod();
?>