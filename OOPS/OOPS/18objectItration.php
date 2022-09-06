<?php

class myClass{
    public $PublicDM = "This is the Example of public DM";
    protected $protectedDM = "This is the Example of protected DM";
    private $privateDM = "This is the Example of private DM";
    public function somemethod(){   
        foreach ($this as $key => $value) {
            echo "<br>Somemethod Key is :".$key."<br>";
            echo "<br>Somemethod  val is :".$value."<br>";
        }      
    }
}
class otherclass extends myClass{
    public function somemethodfromchild(){  
        foreach ($this as $key => $value) {
            echo "<br>Child Key is :".$key."<br>";
            echo "<br>Child val is :".$value."<br>";
        } 
          return "from some method";         
    }
}

$myClass = new otherclass;
echo $myClass->somemethodfromchild();
echo $myClass->somemethod();

foreach ($myClass as $key => $value) {
    echo "out side : <br> $key<br>";
}
?>