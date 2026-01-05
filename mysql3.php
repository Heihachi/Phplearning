<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM employee"; // <-- исправил имя таблицы
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

echo "<table border='1'>";
echo "<tr>";

$num_fields = mysqli_num_fields($result);
$fields = mysqli_fetch_fields($result);
foreach ($fields as $field) {
    echo "<td>" . htmlspecialchars($field->name) . "</td>";
}
echo "</tr>";

while ($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    for ($j = 0; $j < $num_fields; $j++) {
        echo "<td>" . htmlspecialchars((string)$row[$j]) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($conn);
?>
