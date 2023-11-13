function openSidePanel() {
    document.getElementById("sidePanel").style.left = "0px";
}

function closeSidePanel() {
    document.getElementById("sidePanel").style.left = "-250px";
}

function searchFunction() {
    var input, filter, buttons, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    buttons = document.getElementsByClassName('bubble-button');
    
    for (i = 0; i < buttons.length; i++) {
        txtValue = buttons[i].textContent || buttons[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            buttons[i].style.display = "";
        } else {
            buttons[i].style.display = "none";
        }
    }
}


/* < ---- bookmark -- > */
document.addEventListener('DOMContentLoaded', function() {
    var bookmarkBtn = document.getElementById('bookmarkBtn');
    bookmarkBtn.addEventListener('click', function() {
        var pageName = this.getAttribute('data-page');
        // Perform an AJAX request to the server
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Handle the response here if needed
                alert('Page bookmarked!');
            }
        };
        xhttp.open("POST", "bookmark.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("pageName=" + pageName);
    });
});
