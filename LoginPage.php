<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['pass'];

    if (!empty($user) && !empty($password) && !is_numeric($user)) {
        $query = "SELECT * FROM form WHERE user = '$user' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] == $password) {
                // Store user information in sessions
                $_SESSION['name'] = $user_data['name'];
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['userID'] = $user_data['user'];
                $_SESSION['university'] = $user_data['university'];

                // Redirect to the profile.php page
                header("Location: index.php");
                exit;
            }
        }
    }

    // Handle login failure
    echo "<script type='text/javascript'> alert('Wrong username or password') </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="img/x-icon" href="/CPSC-491-FSAH-Project-main/491-FSAH/img/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="CSS/LoginPage.css">
</head>

<body>
<div class="login-container">
    <div class="form-box">
        <h2 id="title"> Log In</h2>
        <form method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="user" id="username" placeholder="Enter your username">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="pass" id="password" placeholder="Enter your password">
            </div>

            <div class="btn-field"> 
                <button type="submit" class="disable" id="signinBtn"> Sign In</button>
                <p>Create an account? <a href='SignUp.php' > SignUp </p>
            </div>

        </form>
    </div>
</div>

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
