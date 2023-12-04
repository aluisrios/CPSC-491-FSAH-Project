<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['fullname'];
    $user = $_POST['user'];
    $password = $_POST['pass'];
    $email = $_POST['mail'];
    $university = $_POST['university']; // Add this line to capture the selected university

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "INSERT INTO form (name, user, email, password, university) VALUES ('$name', '$user', '$email', '$password', '$university')";
        mysqli_query($con, $query);

        // Store user information in sessions
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['userID'] = $user;
        $_SESSION['university'] = $university; // Update the session variable

        // Redirect to the profile.php page
        header("Location: LoginPage.php");
        exit;
    } else {
        echo "<script type='text/javascript'> alert('Please enter valid information') </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/x-icon" href="/CPSC-491-FSAH-Project-main/491-FSAH/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="CSS/LoginPage.css">
</head>
<body>
<div class="login-container">
    <div class="form-box">
        <h2 id="title"> Sign Up</h2>
        <form method="POST">
            <div class="input-field" id="nameField">
                <label for="name">Name</label>
                <input type="text" name="fullname" id="Name" placeholder="Name">
            </div>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="user" id="username" placeholder="Enter your username">
            </div>

            
            <div class="input-group">
                <label for="username">email</label>
                <input type="text" name="mail" id="Email" placeholder="Enter your email">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="pass" id="password" placeholder="Enter your password">
            </div>

        <div class="input-group">
                <label for="university">University</label>
            <select name="university" id="universityDropdown">
                <option value="">Select your university</option>
                <option value="University of California, Irvine">University of California, Irvine</option>
                <option value="California State University, Fullerton">California State University, Fullerton</option>
                <option value="Chapman University">Chapman University</option>
                <option value="Orange Coast College">Orange Coast College</option>
                <option value="Saddleback College">Saddleback College</option>
                <!-- Add more options as needed -->
        </select>
        </div>


            <div class="btn-field"> 
                <button type="submit" id="signupBtn"> Sign Up </button>
            </div>


            
            <p>Already have an account? <a href='LoginPage.php' > Login </p>

        </form>
    </div>
</div>

<script>
        const collegeDropdown = document.getElementById("collegeDropdown");
        const selectedCollege = document.getElementById("selectedCollege");

        collegeDropdown.addEventListener("change", function () 
        {
            selectedCollege.textContent = collegeDropdown.options[collegeDropdown.selectedIndex].text;
        });
    
</script>

<script>
let signinBtn = document.getElementById("signinBtn");
let signupBtn = document.getElementById("signupBtn");
let nameField = document.getElementById("nameField");
let title = document.getElementById("title");

signinBtn.onclick = function() {
    nameField.style.maxHeight = "0";
    title.innerHTML = "Sign In";
    signupBtn.classList.add("disable");
    signinBtn.classList.remove("disable");
}

signupBtn.onclick = function() {
    nameField.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable");
    signinBtn.classList.add("disable");
}
</script>




</body>
</html>
