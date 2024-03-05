<?php

// Start the session
session_start();

function checkLoggedIn(): void {
    // Check if the user ID session exists
    if (!isset($_SESSION['user_id'])) {
        header("location: ../login/login_view.php");
        die();
    }
}

checkLoggedIn();

?>