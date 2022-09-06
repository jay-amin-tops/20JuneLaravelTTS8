<?php

// class ExampleOfConst{
//     public function __construct() {
//         echo "<p>__construct is a method which is invoked by default when objects are created</p>
//         <p>construct never return</p>
//         <p>use for initilise some values</p>
//         ";
//         // return "test";
//     }
// }
class ExampleOfConst{
    public function ExampleOfConst() {
        echo "<p>__construct is a method which is invoked by default when objects are created</p>
        <p>construct never return</p>
        <p>use for initilise some values</p>
        ";
        // return "test";
    }
    public function __construct() {
        echo "<p>__construct is a method which is invoked by default when objects are created</p>
        <p>construct never return</p>
        <p>use for initilise some values</p>
        ";
        // return "test";
    }
}


$ExampleOfConst = new ExampleOfConst;
// $ExampleOfConst->ExampleOfConst()
?>