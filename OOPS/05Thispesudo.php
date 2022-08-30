<?php
class ChetanBhagatBooks{
    // Public Data Member Declaration START
    public $Author = "Chetan";
    // Public Data Member Declaration END
    function twoStates(){
        // $this pesudo variable for access class own properties inside class $this means object it selfes
        return "twoStates".$this->Author;       
    }
    function ThreeIdiots(){
        return "ThreeIdiots".$this->Author;       
    }
}

$ChetanBhagatBooks = new ChetanBhagatBooks;
echo $ChetanBhagatBooks->twoStates();
echo "<br>";
echo $ChetanBhagatBooks->ThreeIdiots();
?>
