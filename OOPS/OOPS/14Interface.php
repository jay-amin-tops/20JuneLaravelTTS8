<?php

interface a{
    // function test(){
    //     echo "called";
    // }
    function test();
    function test1();
}
interface b{
    // function test(){
    //     echo "called";
    // }
    function test();
    function test1();
}
interface c{
    // function test(){
    //     echo "called";
    // }
    function test();
    function test1();
}
class myclassparent {
    public function FunctionName()
    {
        # code...
    }
}
class myclass extends myclassparent implements a,b,c{
    function test(){

    }
    function test1(){
        
    }
}

?>