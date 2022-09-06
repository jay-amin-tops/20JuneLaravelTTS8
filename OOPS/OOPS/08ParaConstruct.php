<?php


class ExampleOfConstSecondClass{
    public function __construct($dbname) {
       echo $this->DataBaseConnection = "<br>$dbname";
    }
}
$ExampleOfConst = new ExampleOfConstSecondClass('DB1');
$ExampleOfConst = new ExampleOfConstSecondClass('DB2');
$ExampleOfConst = new ExampleOfConstSecondClass('DB3');
$ExampleOfConst = new ExampleOfConstSecondClass('Something else');

?>