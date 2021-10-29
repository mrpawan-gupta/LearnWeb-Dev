<?php

    //function declaration
    function writeMsg() {
        echo "Hello world!";
    }

    writeMsg(); // call the function


    // function by value

    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983"); 

    // function call by reffrence

    function add_five(&$value) {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;

?>