<?php
declare (strict_types = 1);
echo "Scallar type declaration<br>";
function average(int $x, int $y): int {
    $value = ( $x+$y ) /2;
    return $value;
}
$avg= average(10, 20);
echo "average=$avg";
?>
