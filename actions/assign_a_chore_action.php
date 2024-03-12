<?php

session_start();
include "../settings/connection.php";
global $conn;

if (isset($_POST['assign-button'])) {

    $assignee = $_POST['person'];
    $assigned_chore = $_POST['chore'];
    $due_date = $_POST['due-date'];
    $who_assigned = $_SESSION['user_id'];

    $sql = "INSERT INTO Assignment (cid, sid, date_assign, date_due, who_assigned) 
            VALUES (?, ?, CURRENT_DATE, ?, ?)";
    $stmt = $conn->prepare($sql);
    $sid = 1;
    $stmt->bind_param("iisi", $assigned_chore, $sid, $due_date, $who_assigned);
    $result = $stmt->execute();

    if ($result) {
        $assignmentId =  mysqli_insert_id($conn);

        $sql2 = "INSERT INTO Assigned_people (pid, assignmentid) 
                 VALUES (?, ?)";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("ii", $assignee, $assignmentId);
        $result2 = $stmt2->execute();

        if ($result2) {
            header('location:../admin/assign_chore_view.php');
            exit();
        }
    } else {
        echo json_encode(['error' => 'Failed to create assignment record']);
    }
}
