<?php

include "../settings/core.php";
include "../actions/get_a_chore_action.php";

if (!isset($_GET['id'])) {
    header('Location: ../admin/chore_control_view.php');
}

$ret_var = $_GET['id'];
$gotten_chore = get_a_chore($ret_var);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chore</title>
    <link rel="stylesheet" href="../css/edit_chore.css">
</head>
<body>
    <div id="sidebar">
        <a href="../view/dashboard.php">Home</a>
        <a href="../admin/chore_control_view.php">Manage chores</a>
        <a href="../login/logout_view.php">Log Out</a>
    </div>

    <div id="content">
<!--        <script>loadContent("../admin/edit_chore_view.php")</script>-->
        <form action="../actions/edit_a_chore_action.php" method="POST" name="edit-chore-form" id="edit-chore-form">
            <h1>Edit a chore</h1>
            <label for="chore-id">
                Chore ID
                <input type="text" name="chore-id" id="chore-id" value="<?php echo $gotten_chore['cid']; ?>" readonly />
            </label>
            <label for="new-chore-name">
                Update chore name
                <input type="text" name="new-chore-name" id="new-chore-name" placeholder="New Chore Name"
                       value="<?php echo $gotten_chore['chorename']; ?>" required />
            </label>
            <button type="submit" name="edit-chore-button" id="edit-chore-btn">Submit</button>
            <a href="../admin/chore_control_view.php">
                <button type="button">Cancel</button>
            </a>
        </form>

    </div>
<!--    value="--><?php //echo $gotten_chore['chorename']; ?><!--"-->
<!--    <script src="../js/chore_control.js"></script>-->
</body>
</html>
