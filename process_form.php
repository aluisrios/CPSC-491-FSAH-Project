<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $birthdate = $_POST["birthdate"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"];
    $marital_status = $_POST["marital_status"];
    $parental_info = $_POST["parental_info"];
    $income = $_POST["income"];
    $household_size = $_POST["household_size"];
    $current_school = $_POST["current_school"];
    $enrollment_status = $_POST["enrollment_status"];
    $major = $_POST["major"];

    
    
    // change this , this is for demonstration purposesjust display the collected data
    echo "<h2>Form Data:</h2>";
    echo "First Name: $first_name<br>";
    echo "Last Name: $last_name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Date of Birth: $birthdate<br>";
    echo "Address: $address<br>";
    echo "City: $city<br>";
    echo "State: $state<br>";
    echo "Zip Code: $zipcode<br>";
    echo "Marital Status: $marital_status<br>";
    echo "Parental Information: $parental_info<br>";
    echo "Annual Income: $income<br>";
    echo "Household Size: $household_size<br>";
    echo "Current School/College: $current_school<br>";
    echo "Enrollment Status: $enrollment_status<br>";
    echo "Intended Major: $major<br>";
}
?>
