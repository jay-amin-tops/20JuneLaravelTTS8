<?php


class AccessModi{
    public $data = 50+50;
    public $dataa = "";
    public $dbConnection = "";
    public function __construct($dbname) {
        $variable = "abc";
        $this->dbConnection = new mysqli("localhost","root","",$dbname);
        echo "<pre>";
        print_r($this->dbConnection);
        echo "</pre>";
        echo $this->dataa = "Total of 50 + 50 is".$this->data.$variable;
    }
    public function ThreeIdiots(){
        return $this->data;
    }
    
    public function __destruct(){
        echo "__destruct";
        unset($this->dbConnection);
    }
}

// $oo = new AccessModi;
$oo = new AccessModi("masterdatabase");
echo "<br>";
echo $oo->ThreeIdiots();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Constructor</h2>
    <p>Constructor is a method which is invioked by default when objects are created.</p>
    <p>Constructor is use to init some value</p>
    <p>Constructor never return</p>
</body>
</html>