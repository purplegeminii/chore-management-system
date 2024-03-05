<?php

session_start();
include "../settings/connection.php";
global $conn;

if (isset($_POST['add-chore-button'])) {
//$_SERVER['HTTP_REFERER'] == "http://localhost/cms/login/register_view.php"
//if ($_SERVER['HTTP_REFERER'] == "localhost/cms/login/register_view.php") {

    $chorename = mysqli_real_escape_string($conn, $_POST['chore-name']);

    if ($chorename == '') {
        echo '<script>alert("empty input")</script>';
        header('location: ../admin/chore_control_view.php');
        exit();
    }

    $query = "INSERT INTO Chores (chorename) VALUE (?)";

    $create_record = $conn->prepare($query);
    $create_record->bind_param('s', $chorename);

    $create_record->execute();


    if ($create_record->affected_rows > 0) {
        header('location: ../admin/chore_control_view.php');
        exit();
    } else {
        echo '<script>alert("did not add chore");</script>';
    }

    $create_record->close();
    $conn->close();
}


?>