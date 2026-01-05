<head>
<p><h2>Calculus</h2></p>
</head>
<body>
<?php
    $a = 42;
    $b = 20;

    $c = $a + $b; /*Assignment operator*/
    echo "Sum operation result: $c </br>";
    
    $c += $a; /* c value was 42 + 20 = 62 */
    echo "Add AND assigment operation result: $c </br>";
    
    $c -= $a;   /*c value was 42 + 20 + 42 = 104 */
    echo "Subtract AND assigment operation result: $c </br>";
    
    $c *= $a;   /*c value was 104 - 42 = 62*/
    echo "Multiply AND assigment operation result: $c </br>";
    
    $c /= $a;   /*c value was 62 * 42 = 2604*/
    echo "Division AND assigment operation result: $c </br>";
    
    $c %= $a;   /*c value was 2604/42 = 62*/
    echo "Modulus AND assigment operation result: $c </br>";
    /* final value of c will be 20 */
?>
</body>