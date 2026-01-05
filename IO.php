<?php
print "Enter lenght:";
fscanf(STDIN, "%d", $a); // STDIN - standart input
echo "Enter wight:";
fscanf(STDIN, "%d", $b);
$c=$a*$b;
fprintf(STDOUT, "Area=%d", $c); // STDOUT - standart output
?>
