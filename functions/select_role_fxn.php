<?php

include "../settings/connection.php";
global $conn;

$sql = "SELECT * FROM Family_name";
$result = mysqli_query($conn, $sql);
//$rows;

if ($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_free_result($result);

mysqli_close($conn);

?>
