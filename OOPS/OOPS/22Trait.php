<?php

trait TraitName{
    public function FunctionName(){
        echo "called";
    }
}
trait TraitName1{
    public function FunctionName1($arg){
        echo "FunctionName1";
    }
}
trait TraitName2{
    public function FunctionName2(){
        echo "FunctionName2";
    }
}
class myClass{
    use TraitName;
    use TraitName1;
    use TraitName2;
    public function otherFun(){
        echo "data";
        echo "<BR>";
        $this->FunctionName();
        echo "<BR>";
        echo "<BR>";
        $this->FunctionName1("A");
        echo "<BR>";
        echo "<BR>";
        $this->FunctionName2();
        echo "<BR>";
    }
}
$TraitName = new myClass;
$TraitName->otherFun()
?>