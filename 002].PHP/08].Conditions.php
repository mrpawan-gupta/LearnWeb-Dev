<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
else {
  echo "Have a good night!";
}

$s = date("H");

if ($s < "10") {
  echo "Have a good morning!";
} elseif ($s < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

?>