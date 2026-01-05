<?php 
echo "5 <=> 10/2 = " . ( 5 <=> 10/2 ) . "<br/>"; // <=> - spaceship operator :))
echo "5 <=> 10/2.1 = " . ( 5 <=> 10/2.1 ) . "<br/>";
echo "3.142 <=> 22/7 = " . ( 3.142 <=> 22/7 ) . "<br/>";
echo "substr('Hi, Wold!!', 0,5) = ";
echo ( substr('Hi, Wold!!', 0,5) <=> "Hi") . "<br/>";
?>