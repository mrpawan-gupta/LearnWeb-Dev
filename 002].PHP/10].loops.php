<?php

/*
    In PHP, we have the following loop types:

    1. while - loops through a block of code as long as the specified condition is true
    2. do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    3. for - loops through a block of code a specified number of times
    4. foreach - loops through a block of code for each element in an array

*/

     // ----> While loop

    $x = 1;

    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    // ----> Do while Loop

    $x = 6;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);


    // ------> for loop

    for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
    }

    // -----> for Each

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

?>