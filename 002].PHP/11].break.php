<?php

// break statement 


for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    echo "Break :-------- <br>";
    break;
  }
  echo "The number is: $x <br>";
}

// contineue statement 


for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    echo "Continue :----- <br> ";
    continue;
  }
  echo "The number is: $x <br>";
}
?>