<?php 
if (isset($_GET["submit"])){
    echo "Welcome ". $_GET['name']. "<br/>";
    echo "You are ". $_GET['age']. " year old.";
    
    exit();
}
?>
<html>
<body>

<form action="<?php $_PHP_SELF ?>" method="GET">
NAME: <input type = "text" name = "name" />
AGE: <input type = "text" name = "age" />
<input type = "submit" name = "submit" /> 
</form>

</body>
</html>