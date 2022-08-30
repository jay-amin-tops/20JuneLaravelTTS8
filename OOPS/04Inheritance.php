<?php
class MathOp{
    function Addition($a,$b=0){
        return $sum = $a+$b;       
    }
    function AdditionThree($a,$b=0,$c=0){
        return $sum = $a+$b+$c;       
    }
}
class AdvanceMathOp extends MathOp{
    function AverageofTow($x,$z=0){
        // $sum = $a+$b;      
        $sum = $this->Addition($x,$z); 
        return $sum/2;
    }
}

$AdvanceMathOp = new AdvanceMathOp;
echo $AdvanceMathOp->AverageofTow(45,95);
?>
