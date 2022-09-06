<?php
class ExampleOfConst{
    public function ExampleOfConst() {
        echo $this->Someval;
    }
    public function __construct() {
        $this->Someval = "Something";
        $this->Someval1 = "Something";
        $this->Someval2 = "Something";
        $this->Someval3 = "Something";
        $this->Someval4 = "Something";
    }
    public function __destruct(){
        $this->Someval1 = "";
        unset($this->Someval1);
        $this->Someval2 = null;
        $this->Someval3 = null;
        $this->Someval4 = "";
        $this->Someval = null;
        echo $this->Someval;
        echo "dest val";
    }
    public function ExampleOfConstAfterDes() {
        echo $this->Someval;
    }
}


$ExampleOfConst = new ExampleOfConst;
$ExampleOfConst->ExampleOfConst();
$ExampleOfConst->ExampleOfConstAfterDes();
?>