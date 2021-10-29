<?php

    $emp = [
        [1,"krishna","manager",5000],
        [2,"sneha","HR",2500],
        [3,"Pawan","Engineer",4500]
    ];

    //echo $emp[][] ;

    echo "<pre>";
    print_r($emp);
    echo "</pre>";

    echo "<table border='1px' >";
    foreach($emp as $v1){
        echo "<tr>";
        foreach($v1 as $v2){
            echo "<td>$v2<td>";
        }
        echo "<tr>";
    }
    echo "</table>";
?>