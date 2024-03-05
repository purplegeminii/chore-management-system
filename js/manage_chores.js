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
loadContent('../view/manage_chores.php');
