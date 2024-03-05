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
    <button>Assign a chore</button>

    <form action="" method="post" name="assign-chore-form" id="assign-form">
        <label for="person">Assignee</label>
        <select name="person" id="person">
            <!-- use js to dynamically add to dropdown -->
            <option value="0">Assign person</option>
        </select>
        <label for="chore">Assign chore</label>
        <select name="chore" id="chore">
            <!-- use js to dynamically add to dropdown -->
            <option value="0">Assign Chore</option>
        </select>
        <input type="date" name="date" id="date" required />
        <button type="submit" name="submit-button" id="submit-btn">Submit</button>
    </form>

</body>
</html>