<?php

    $colors = array("red","yellow","blue",20,1.5,'A');
    
    echo $colors[0]."<br>";
    echo $colors[1]."<br>";
    echo $colors[2]."<br>";
    echo $colors[3]."<br>";
    echo $colors[4]."<br>";
    echo $colors[5]."<br>";

    echo "<pre>";
    print_r($colors);
    echo "</>pre";

    // print Array by loop 

    for($i=0;$i<6;$i++){
        echo $colors[$i]."<br>";
    }

    echo count($colors); // print size od array.

    
?>