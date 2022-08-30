<?php
class MathOp{
    function Addition($a,$b=0){
        return $sum = $a+$b;       
    }
    function AdditionThree($a,$b=0,$c=0){
        return $sum = $a+$b+$c;       
    }
}
$MathOp = new MathOp;
echo "<br>";
echo $MathOp->Addition(50,60);
echo "<br>";
echo $MathOp->AdditionThree(50,60,80);

?>
