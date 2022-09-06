<?php

use MathOp as GlobalMathOp;

class MathOp{
    public $PublicDM = "Public DataMember";
    protected $ProtectedDM = "Protected DataMember";
    private $PrivateDM = "Private DataMember";
    function publicFunc(){
        echo "publicFunc";
    }
    protected function protectedFunc(){
        echo "protectedFunc";     
    }
    private function privateFunc(){
        echo "privateFunc";
    }
}

class OtherClass extends GlobalMathOp{
    // public function FunctionName(){
    //     echo "From Child function calling parent ".$this->publicFunc();
    // }
    public function FunctionName(){
        echo $this->protectedFunc();
        // echo $this->privateFunc(); // Call to private method not allowed 
    }
}


$ObjOfAdv = new OtherClass;
echo "<br>";
echo $ObjOfAdv->FunctionName();

// $ObjOfAdv = new MathOp;
// echo "<br>";
// echo $ObjOfAdv->PublicDM;
// echo "<br>";
// echo "<br>";
// echo $ObjOfAdv->ProtectedDM; //Cannot access protected property MathOp::$ProtectedDM in
// echo "<br>";
// echo "<br>";
// echo $ObjOfAdv->PrivateDM; // Cannot access private property MathOp::$PrivateDM in
// echo "<br>";
?>