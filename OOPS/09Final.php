<?php

// final class FinalExample{
//     final public function FunctionName(){
//         echo "called";
//     }
// }
class FinalExample{
    final public function FunctionName(){
        echo "called";
    }
}
class FinalExampleChild extends FinalExample{ //Class FinalExampleChild cannot extend final class FinalExample
    // final public function FunctionName(){ // Cannot override final method FinalExample::FunctionName() finalized metrhods Cannot overrided
    //     echo "called";
    // }
    final public function FunctionName1(){
        echo "called";
    }
}
$FinalExample = new FinalExample;
$FinalExample->FunctionName();
?>