<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Chores</title>
    <link rel="stylesheet" href="../css/manage_chores.css">
</head>
<body>
    <div id="content">
<!--        <h1>Manage Chores</h1>-->
<!--        <a href="#" onclick="loadContent('../admin/chore_control_view.php')"><button>Chore Control</button></a>-->

        <!-- Ongoing/Pending Chore Assignments Section -->
        <section>
            <h2>Ongoing/Pending Chore Assignments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Chore Name</th>
                        <th>Assigned By</th>
                        <th>Date Assigned</th>
                        <th>Date Due</th>
                        <th>Chore Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chore 1</td>
                        <td>User A</td>
                        <td>2022-03-01</td>
                        <td>2022-03-10</td>
                        <td>Assigned</td>
                        <td>
                            <a href="../admin/edit_chore_view.php?id=1">
                                <img src="../assets/edit.png" class="icon" alt="Edit" style="width: 30px; height: 30px" />
                            </a>
                            <a href="../actions/delete_chore_action.php?id=1">
                                <img src="../assets/delete.png" class="icon" alt="Delete" style="width: 30px; height: 30px" />
                            </a>
                            <a href="">
                                <img src="../assets/check-mark.png" class="icon" alt="Check-mark" style="width: 30px; height: 30px" />
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section><br>

        <!-- Completed Chores Section -->
        <section>
            <h2>Completed Chores</h2>
            <table>
                <thead>
                    <tr>
                        <th>Chore Name</th>
                        <th>Assigned By</th>
                        <th>Date Assigned</th>
                        <th>Date Due</th>
                        <th>Chore Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chore 2</td>
                        <td>User B</td>
                        <td>2022-03-05</td>
                        <td>2022-03-15</td>
                        <td>Completed</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <script src="../js/manage_chores.js"></script>
<!--    <script src="../js/add_chore.js"></script>-->
</body>
</html>