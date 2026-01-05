<html>
<body>
<?php 
//continue example
$y = 0;
while($y<10)
{
    $y++;
    $x=rand(1,10);
    if ($x==5) continue;
    echo " random number $y : value : $x <br>";
}
?>
</body>
</html>