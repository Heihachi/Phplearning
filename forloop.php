<html>
<body>
<?php 
//first example
    for ($x=1; $x<=10; $x++ )
    {
        echo $x." ";
    }
echo "<br><br>";
    
//Second example
    for ($x=0; $x!=5; )
    {
        $x=rand(1,10);
        echo $x." ";
    }
echo "<br><br>";

//Third example
    $arr = array(10,20,30,40,50);
    for ($x; $x<=4; $x++ )
    {
        print $arr[$x]." ";
    }
?>
</body>
</html>