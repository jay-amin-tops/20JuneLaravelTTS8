<?php

class ChetanBooks{
    // $author = "ChetanBhag"; //simple variable not able to declared inside class
    public $author = "ChetanBhag";
    function towIdiots(){
        return "towIdiots ".$this->author; 
    }
    function fourStates(){
        return "fourStates ".$this->author; 
    }
}

$MatchOb = new ChetanBooks;
echo $MatchOb->towIdiots();
echo "<br>";
echo $MatchOb->fourStates();

?>