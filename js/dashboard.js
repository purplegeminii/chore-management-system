// document.write('<script type="text/javascript" src="../js/add_chore.js"></script>');

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

// Load the home page by default
loadContent('../view/dashboard.php');
