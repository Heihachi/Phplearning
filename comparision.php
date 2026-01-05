<head>
<p><h2>Comparision</h2></p>
</head>
<body>
<?php
$a = 42;
$b = 20;

if( $a == $b ) {
    echo "Test1 : a is equal to b<br/>";
} else {
    echo "Test1 : a is not equal to b<br/>";
}
    
if( $a > $b ) {
    echo "Test2 : a is greater to b<br/>";
} else {
    echo "Test2 : a is less to b<br/>";
}
    
if( $a < $b ) {
    echo "Test3 : a is less to b<br/>";
} else {
    echo "Test3 : a is greater to b<br/>";
}
    
if( $a != $b ) {
    echo "Test4 : a is not equal to b<br/>";
} else {
    echo "Test4 : a is equal to b<br/>";
}

if( $a >= $b ) {
    echo "Test5 : a is either greater than or equal to b<br/>";
} else {
    echo "Test5 : a is either less than or equal to b<br/>";
}
    
if( $a <= $b ) {
    echo "Test6 : a is either less than or equal to b<br/>";
} else {
    echo "Test6 : a is either greater than or equal to b<br/>";
}
?>
</body>