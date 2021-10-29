<?php

    $x = 10;
    $y = 5;
    function test(){
        global $x , $y;
        echo "Variable x inside function : $x <br>";
        $x += $y;
    }

    test();
    echo " Varibale x after updation is : $x";

?>