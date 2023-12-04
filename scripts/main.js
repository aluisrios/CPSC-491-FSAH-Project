/*side panel*/
function openSidePanel() {
    document.getElementById("sidePanel").style.left = "0px";
}

function closeSidePanel() {
    document.getElementById("sidePanel").style.left = "-250px";
}


/*search button*/
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

/*robot*/
document.addEventListener('DOMContentLoaded', function() {
    // Select the additional info div and hide it initially
    var additionalInfo = document.querySelector('.additional-info');
    additionalInfo.style.display = 'none';

    // Select the website prompt div
    var websitePrompt = document.querySelector('.website-prompt');

    // Select the Next button and display it after 5 seconds
    var nextButton = document.getElementById('next-button');
    setTimeout(function() {
        nextButton.style.display = 'block';
    }, 18000); // 18000 milliseconds = 18 seconds

    // Add event listener for when the Next button is clicked
    nextButton.addEventListener('click', function() {
        additionalInfo.style.display = 'block'; // Show the additional information
        websitePrompt.style.display = 'none'; // Hide the website prompt
        this.style.display = 'none'; // Hide the Next button
    });
});

/////////////// more robot
document.addEventListener('DOMContentLoaded', function() {
    // Select the robot elements
    var robotElements = document.querySelectorAll('.face, .head, .body, .left-hand, .right-hand, .eye1, .eye2, .robot-introduction');
    
    // Select the Yes and No buttons and the help message div
    var yesButton = document.getElementById('yes-button');
    var noButton = document.getElementById('no-button');
    var helpMessage = document.querySelector('.help-message');
    var additionalInfo = document.querySelector('.additional-info');
    var websitePrompt = document.querySelector('.website-prompt');

    // Function to hide all robot elements
    function hideRobot() {
        robotElements.forEach(function(element) {
            element.style.display = 'none';
        });
    }

    // Function to hide the additional info
    function hideAdditionalInfo() {
        additionalInfo.style.display = 'none';
    }

    // Event listener for the Yes button
    yesButton.addEventListener('click', function() {
        hideAdditionalInfo();
        helpMessage.style.display = 'block';
        yesButton.style.display = 'none';
        noButton.style.display = 'none';
    });

    // Event listener for the No button
    noButton.addEventListener('click', function() {
        hideRobot();
        websitePrompt.style.display = 'none';
        additionalInfo.style.display = 'none';
    });

    //Event listener if the user decides to click the Yes button
    // Select the Support button
    var supportButton = document.getElementById('support');

    // Event listener for the Support button
    supportButton.addEventListener('click', function() {
        window.location.href = 'supportPage.html'; // Redirect to the support page
    });

    // Select the Profile button
    var profileButton = document.getElementById('profile');

    // Event listener for the Profile button
    profileButton.addEventListener('click', function() {
        window.location.href = 'profile.php';
    });

    // Select the Filter button
    var filterButton = document.getElementById('filter');

    // Event listener for the Filter button
    filterButton.addEventListener('click', function() {
        window.location.href = 'page9.html';
    });
    
    // Select the Continue button
    var continueButton = document.getElementById('continue');

    // Event listener for the Continue button
    continueButton.addEventListener('click', function() {
        hideRobot();
        helpMessage.style.display = 'none';
    });
});



//Filter
