<?php
include "../actions/get_all_chores_action.php";
$chores = get_all_chores();
?>

<section>
    <table border="1">
        <thead>
            <tr>
                <th>Chore ID</th>
                <th>Chore Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($chores as $chore): ?>
            <tr>
                <td><?= $chore['cid']; ?></td>
                <td><?= $chore['chorename']; ?></td>
                <td>
                    <a href="../admin/edit_chore_view.php?id=<?= $chore['cid']; ?>">
                        <img src="../assets/edit.png" class="edit-icon" alt="Edit" />
                    </a>
                    <a href="../actions/delete_chore_action.php?id=<?= $chore['cid']; ?>">
                        <img src="../assets/delete.png" class="delete-icon" alt="Delete" />
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section><br />
