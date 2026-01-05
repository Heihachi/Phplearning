<?php
if (isset($_POST["submit"])){
    echo "Welcome ". $_POST['name']. "<br/>";
    echo "You are ". $_POST['age']. " year old.";
    
    exit();
}
?>
<html>
<body>

<form action="<?php $_PHP_SELF ?>" method="POST">
NAME: <input type = "text" name = "name" />
AGE: <input type = "text" name = "age" />
<input type = "submit" name = "submit" /> 
</form>

</body>
</html>