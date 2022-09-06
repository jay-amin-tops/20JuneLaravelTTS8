<?php

class MathOp{
    function Addition($a,$b=0){
        return $a+$b; 
    }
}

$MatchOb = new MathOp;
echo $MatchOb->Addition(5);

?>