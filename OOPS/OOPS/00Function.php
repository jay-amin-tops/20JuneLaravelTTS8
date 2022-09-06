<?php
// Simple UDF START
// function Addition(){
//     $a = 50;
//     $b = 50;
//     return $a+$b;
// }
// Simple UDF END
// echo Addition();
// echo "<br>";
// echo Addition();
// echo "<br>";
// echo Addition();
// echo "<br>";
// echo Addition();
// echo "<br>";
// echo Addition();
// echo "<br>";
// echo Addition();
// echo "<br>";



// Para UDF START
// function Addition($a,$b){
//     // $a = 50;
//     // $b = 50;
//     return $a+$b;
// }
// Para UDF END
// Default Para UDF START
function Addition($a,$b=0){
    // $a = 50;
    // $b = 50;
    return $a+$b;
}
// Default Para UDF END
echo Addition(50,50);
echo "<br>";
echo Addition(30,50);
echo "<br>";
echo Addition(90,44);
echo "<br>";
echo Addition(44);
echo "<br>";
echo Addition(88,88);
echo "<br>";
echo Addition(99,77);
echo "<br>";



?>