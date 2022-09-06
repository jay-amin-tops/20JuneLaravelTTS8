<?php

class getSetCall{
    public function __get($var){
        echo "called";
    }
}

$Data = new getSetCall;
$Data->someData;
?>