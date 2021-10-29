<?php

    $emp = [
        [1,"krishna","manager",5000],
        [2,"sneha","HR",2500],
        [3,"Pawan","Engineer",4500],
        [4, "Raj","Sweaper",500],
    ];

    $fruits = array("orange","apple","banana","grape");

    echo count($fruits)."<br>";

    echo count($emp)."<br/>"; // no of rows
    echo count($emp,1)."<br/>"; // no of element in emp[][]

    // in_array --> 0,1 ; search element
    // array_Search ---> index 04 key ; serch element

    echo in_array("apple",$fruits)."<br/>";
    echo array_search("apple,$fruits")."<br/>";

    // array replace ---> 

    // array_replace_recursive --->


    // sort array

?>