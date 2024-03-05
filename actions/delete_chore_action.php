<?php

include "../settings/connection.php";
global $conn;

if (isset($_GET['id'])) {
    $cid = $_GET['id'];
    $sql = "DELETE FROM Chores WHERE cid = $cid";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: ../admin/chore_control_view.php');
    } else {
        echo json_encode(['error' => 'Failed to delete record']);
    }
} else {
    header('Location: ../admin/chore_control_view.php');
    exit();
}

?>
