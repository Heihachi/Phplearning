<?php 
echo "<p>coalesc operator in php 7</p>";
$user = $_GET['user'] ?? 'not pased'; // ?? - coalesc operator
echo "user name $user<br/>";
echo "<p>terniary operator result</p>";
$user = isset($_GET['user']) ? $_GET['user'] : 'not passed'; // same line as the line with ??
print("user name " . $user);
print("<br/>");
?>