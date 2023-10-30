<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['fullname'];
        $email = $_POST['user'];
        $password = $_POST['pass'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "insert into form (name, email, password) values ('$name' , '$email' , '$password')";

            mysqli_query($con, $query);
        }

        else 
        {
            echo "<script type= 'text/javascript'> alert('please Enter some valid information') </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
                <label for="password">Password</label>
                <input type="password" name="pass" id="password" placeholder="Enter your password">
            </div>

            <div class="btn-field"> 
                <button type="submit" id="signupBtn"> Sign Up </button>
            </div>
            
            <p>Already have an account? <a href='LoginPage.php' > Login </p>

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
