<?php


function myTest(){
    static $x = 0;
    echo $x;
    $x++;
    echo "<br>";
}

myTest();
myTest();
myTest();

?>