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

