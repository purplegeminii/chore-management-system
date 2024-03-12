<?php

include "../settings/connection.php";
global $conn;

if (isset($_POST['edit-chore-button'])) {
    $cid = $_POST['chore-id'];
    $new_chore_name = $_POST['new-chore-name'];

    $sql = "UPDATE Chores SET chorename = '$new_chore_name' WHERE cid = $cid";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location:../admin/chore_control_view.php');
    } else {
        echo json_encode(['error' => 'Failed to update record']);
    }
}

?>
