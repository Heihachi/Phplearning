<?php 
    $x=rand(1,10);
    $y=rand(1,10);
    $z=rand(1,4);
    echo "Numbers : $x, $y operation code: $z";
    echo "\n";
    switch($z)
    {
        case 1: $r=$x+$y; break;
        case 2: $r=$x-$y; break;
        case 3: $r=$x*$y; break;
        case 4: $r=$x/$y;
    }
    echo "result = $r";
?>