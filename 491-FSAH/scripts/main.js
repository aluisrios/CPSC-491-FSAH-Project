function openSidePanel() {
    document.getElementById("sidePanel").style.left = "0";
}

function closeSidePanel() {
    document.getElementById("sidePanel").style.left = "-250px";
}


document.getElementById('searchInput').addEventListener('input', function() {
    let searchTerm = this.value.toLowerCase();
    let buttons = document.querySelectorAll('.bubble-button, .Newbubble-button');

    buttons.forEach(button => {
        if (button.getAttribute('data-name').toLowerCase().includes(searchTerm)) {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    });
});
