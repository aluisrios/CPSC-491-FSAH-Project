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


/*application*/
document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.onsubmit = function(event) {
        event.preventDefault(); // Always prevent default to control the flow

        var income = parseFloat(document.getElementById('income').value);
        var messageDiv = document.getElementById('message');

        // Reset the message
        messageDiv.style.display = 'none';
        messageDiv.innerHTML = '';

        if (isNaN(income) || income > 40000) {
            messageDiv.innerHTML = 'You do not qualify for financial aid as your annual income is more than $40,000.';
        } else {
            messageDiv.innerHTML = 'You qualify for financial aid.';
        }

        // Show the message with fade-in effect
        messageDiv.style.display = 'block';
    };
});


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
    var filterButton = document.getElementById('filter');
    var filterPrompt = document.getElementById('filter-prompt');

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

    // Function to show filter prompt
    function showFilterPrompt() {
        filterPrompt.style.display = 'block';
    }

    // Function to close filter prompt
    window.closeFilterPrompt = function() {
        filterPrompt.style.display = 'none';
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

    // Event listener for the Filter button
    filterButton.addEventListener('click', function() {
        showFilterPrompt();
    });

    // Select the Support button
    var supportButton = document.getElementById('support');

    // Event listener for the Support button
    supportButton.addEventListener('click', function() {
        window.location.href = 'supportPage.html'; // Redirect to the support page
    });

    // Select the Continue button
    var continueButton = document.getElementById('continue');

    // Event listener for the Continue button
    continueButton.addEventListener('click', function() {
        hideRobot();
        helpMessage.style.display = 'none';
    });
});

    // Select the Support button
    var supportButton = document.getElementById('profile');

    // Event listener for the Support button
    supportButton.addEventListener('click', function() {
        window.location.href = 'profile.php'; // Redirect to the support page
    });



//Filter
document.getElementById('apply-filter').addEventListener('click', function() {
    var results = document.getElementById('results');
    var grants = [
        {id: 'calGrantA', name: 'Cal Grant A'},
        {id: 'calGrantB', name: 'Cal Grant B'},
        {id: 'pellGrant', name: 'Pell Grant'},
        {id: 'fseog', name: 'FSEOG'},
        {id: 'mcs', name: 'MCS'},
        {id: 'sug', name: 'SUG'}
    ];

    var selectedGrants = grants.filter(grant => document.getElementById(grant.id).checked)
                               .map(grant => `<p>${grant.name}</p>`)
                               .join('');

    results.innerHTML = selectedGrants || '<p>No grants selected</p>';
});

