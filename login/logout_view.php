<?php

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['role_id']);
header("location: ../login/login_view.php");
exit();

?>