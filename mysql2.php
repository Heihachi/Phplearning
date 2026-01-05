<html>
<head>
<title>Add new record in MYSQL Database</title>
</head>
<body>

<?php
if (isset($_POST['add'])) {

    $conn = mysqli_connect("localhost", "root", "", "testdb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $emp_name = $_POST['emp_name'];
    $emp_address = $_POST['emp_address'];
    $emp_salary = $_POST['emp_salary'];

    // Простая валидация
    if ($emp_name == "" || $emp_address == "" || $emp_salary == "") {
        die("All fields are required");
    }

    $sql = "INSERT INTO employee (emp_name, emp_address, emp_salary)
            VALUES ('$emp_name', '$emp_address', $emp_salary)";

    if (!mysqli_query($conn, $sql)) {
        die("Could not enter data: " . mysqli_error($conn));
    }

    echo "Entered data successfully<br>";

    mysqli_close($conn);

} else {
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<table border="0">
<tr>
    <td>Employee Name</td>
    <td><input name="emp_name" type="text"></td>
</tr>
<tr>
    <td>Employee Address</td>
    <td><input name="emp_address" type="text"></td>
</tr>
<tr>
    <td>Employee Salary</td>
    <td><input name="emp_salary" type="number"></td>
</tr>
<tr>
    <td></td>
    <td><input name="add" type="submit" value="Add Employee"></td>
</tr>
</table>
</form>

<?php } ?>

</body>
</html>
