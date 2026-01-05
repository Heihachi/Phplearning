<?php 
    // cryptography secure program random number generator
    $bytes = random_bytes(5);
    echo $bytes . "<br>";
    print(bin2hex($bytes)) . "<br>";
    $int = random_int(100, 999);
    echo "random integer = $int";
?>