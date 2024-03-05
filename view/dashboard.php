<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard page</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div id="sidebar">
        <a href="../view/dashboard.php">Home</a>
        <a href="../admin/chore_control_view.php">Manage chores</a>
        <a href="#" onclick="loadContent('../view/assign_chore.php')">Assign chores</a>
        <a href="../login/logout_view.php">Log Out</a>
    </div>

    <div id="content">
        <h1>DASHBOARD</h1>
<!--        <a href="../view/manage_chores.php" class="stats-container">-->
        <div class="stats-container">
            <div class="stat-box">
                <h2>In Progress</h2>
                <p>15 chores</p>
            </div>
            <div class="stat-box">
                <h2>Incomplete</h2>
                <p>5 chores</p>
            </div>
            <div class="stat-box">
                <h2>Completed</h2>
                <p>30 chores</p>
            </div>
        </div>
<!--        </a>-->
    </div>

    <script type="text/javascript" src="../js/dashboard.js"></script>
</body>
</html>