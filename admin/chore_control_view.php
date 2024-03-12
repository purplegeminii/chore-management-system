<?php
include "../settings/core.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Chore</title>
    <link rel="stylesheet" href="../css/chore_control.css">
</head>
<body>
    <div id="sidebar">
        <a href="../view/dashboard.php">Home</a>
        <a href="../admin/chore_control_view.php">Manage chores</a>
        <a href="#" onclick="loadContent('../admin/assign_chore_view.php')">Assign chores</a>
        <a href="../login/logout_view.php">Log Out</a>
    </div>

    <div id="content">
        <h2>Chore List</h2>
        <div class="heading">
            <button name="showFormBtn" id="showFormBtn" onclick="showForm()">Add a chore</button>
            <button name="assign-button" id="assign-btn" onclick="loadContent('../admin/assign_chore_view.php')">Assign to chore</button>
        </div>
        <?php
        include "../functions/chore_fxn.php";
        ?>
        <br />

        <form action="../actions/add_chore_action.php" method="POST"
              name="add-chore-form" id="add-chore-form" style="display: block">
            <h1>Add a chore</h1>
            <!--suppress HtmlFormInputWithoutLabel -->
            <input type="text" name="chore-name" placeholder="chore name" required />
            <button type="submit" name="add-chore-button" id="add-chore-btn">Submit</button>
            <button type="button" name="closeFormBtn" id="closeFormBtn" onclick="closeForm()">Cancel</button>
        </form>
    </div>

    <script src="../js/chore_control.js"></script>
</body>
</html>
