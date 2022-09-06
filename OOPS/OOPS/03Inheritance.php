<?php

use MathOp as GlobalMathOp;

class MathOp{
    function Addition($a,$b=0){
        return $a+$b; 
    }
    function AdditionThree($a,$b,$c){
        return $a+$b+$c; 
    }
}
class AdvMathOp extends MathOp{
    function AvgOfTow($a,$b=0){
        $Addi = $this->Addition($a,$b);
        return $Addi/2;
        // return $a+$b; 
    }
}

$ObjOfAdv = new AdvMathOp;
// echo "<br>";
// echo $ObjOfAdv->Addition(50,5);
// echo "<br>";
echo $ObjOfAdv->AvgOfTow(50,5);
echo "<br>";

?>