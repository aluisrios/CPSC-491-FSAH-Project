document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('financialAidForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        var income = parseFloat(document.getElementById('income').value);
        var enrollmentStatus = document.getElementById('enrollment_status').value; // Updated ID here
        var messageDiv = document.getElementById('message');

        // Reset the message
        messageDiv.style.display = 'none';
        messageDiv.innerHTML = '';

        var printButton = document.getElementById('printButton');
        if (printButton) {
            // Remove the existing print button if it exists
            printButton.parentNode.removeChild(printButton);
        }

        if (!isNaN(income) && enrollmentStatus !== 'Less_Than_Half_time') { // Updated value here
            messageDiv.innerHTML = 'You qualify for the Federal Supplemental Educational Opportunity Grant.';
            
            // Create and append the print button if qualified
            var newPrintButton = document.createElement('button');
            newPrintButton.id = 'printButton';
            newPrintButton.textContent = 'Print';
            newPrintButton.addEventListener('click', function() {
                window.print();
            });
            document.body.appendChild(newPrintButton);
        } else {
            messageDiv.innerHTML = 'You do not qualify for financial aid with the Federal Supplemental Educational Opportunity Grant.';
        }

        // Show the message with fade-in effect
        messageDiv.style.display = 'block';
    });
});
