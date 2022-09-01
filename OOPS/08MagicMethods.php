<?php
class MagicMethods{
    public function __get($val){
        echo "<br>__get : ".$val;
    }
    public function __set($key,$val){
        echo "<br>__set : ".$key,$val;
    }
    public function __call($func,$array){
        echo "<br>__call functiona name : ".$func;
        echo "<pre>";
        print_r($array);
    }
    // public function select($func,$array){
    //     echo "<br>__call functiona name : ".$func;
    //     echo "<pre>";
    //     print_r($array);
    // }
    // public function select($func,$array){
    //     echo "<br>__call functiona name : ".$func;
    //     echo "<pre>";
    //     print_r($array);
    // }
}
// $oo = new AccessModi;
$oo = new MagicMethods();
$oo->username;
$oo->kaipan;
$oo->something="anything else for data";
$oo->select("username","password","Mobile");
$oo->get("cityname");
$oo->anything("cityname");

?>
