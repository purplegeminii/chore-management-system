<?php
include "../settings/core.php";
include "../functions/get_assignee_list.php";
include "../actions/get_all_chores_action.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign chore</title>
    <link rel="stylesheet" href="../css/assign_chore.css">
</head>
<body>
    <h1>Assign Chore</h1>
    <form action="../actions/assign_a_chore_action.php" method="POST" name="assign-chore-form" id="assign-form">
        <label for="person">Assignee</label>
        <?php
        if (!empty($rows)) {
            echo '<select name="person" id="person" required>';
            echo '<option value="0">Assign person</option>';
            foreach ($rows as $row) {
                echo '<option value="' . $row['pid'] . '">' . $row['fname'] . '</option>';
            }
            echo '</select>';
        } else {
            echo 'Assignee data not available.</br>';
        }
        ?>
        <label for="chore">Assign chore</label>
        <?php
        $chores = get_all_chores();
        if (!empty($chores)) {
            echo '<select name="chore" id="chore" required>';
            echo '<option value="0">Assign chore</option>';
            foreach ($chores as $row) {
                echo '<option value="' . $row['cid'] . '">' . $row['chorename'] . '</option>';
            }
            echo '</select>';
        } else {
            echo 'Chores data not available.</br>';
        }
        ?>
        <label for="due-date">Due date</label>
        <input type="date" name="due-date" id="due-date" required />
        <button type="submit" name="assign-button" id="assign-btn">Submit</button>
    </form>
</body>
</html>
