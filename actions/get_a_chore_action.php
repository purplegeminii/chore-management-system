<?php

include "../settings/connection.php";

function get_a_chore($id): array {
    global $conn;
    $sql = "SELECT * FROM Chores WHERE cid = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        mysqli_free_result($result);
        mysqli_close($conn);
        return $row;
    } else {
        echo "Error: " . $sql . "<br />" . mysqli_error($conn);
        return [];
    }
}

?>
