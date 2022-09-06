<?php

final class myClass{
    public $PublicDM = "This is the Example of public DM";
    protected $protectedDM = "This is the Example of protected DM";
    private $privateDM = "This is the Example of private DM";
    public function somemethod(){   
        "test";   
    }
}
class otherclass { //: Class otherclass may not inherit from final class (
    public function somemethod(){   
        foreach ($this as $key => $value) {
            echo "<br>Key is :".$key."<br>";
            echo "<br>val is :".$value."<br>";
        }      
    }
}

$myClass = new myClass;
// echo $myClass->somemethodfromchild();
echo $myClass->somemethod();

foreach ($myClass as $key => $value) {
    echo "<br> $key<br>";
}
?>