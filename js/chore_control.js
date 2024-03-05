function showForm() {
    document.getElementById('add-chore-form').style.display = 'block';
}

function closeForm() {
    document.getElementById('add-chore-form').style.display = 'none';
}

function loadContent(page) {
    fetch(page)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content').innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

// Load the manage_chores page by default
loadContent('../admin/chore_control_view.php');
