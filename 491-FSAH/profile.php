<?php
session_start();

// Check if the user is logged in (you may want to implement proper authentication)
if (!isset($_SESSION['name'])) {
    header("Location: LoginPage.php"); // Redirect to the login page if not logged in
    exit;
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$userID = $_SESSION['userID'];
$university = $_SESSION['university'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/profile.css"> 
    <title>User Profile</title>
</head>
<body>
    <header>
        <h1>User Profile</h1>
    </header>
    <div class="container">
        <h2>Personal Information</h2>
        <form>
            <ul>
                <li>
                    <label for="name">Name:</label>
                    <h3><?php echo $name; ?></h3>
                </li>

                <li>
                    <label for="email">Email:</label>
                    <h3><?php echo $email; ?></h3>
                </li>

                <li>
                    <label for="userID">User ID:</label>
                    <h3><?php echo $userID; ?></h3>
                </li>

                <li>
                    <label for="university">University:</label>
                    <h3><?php echo $university; ?></h3>
                </li>
            </ul>

        </form>
        <!-- Rest of your code -->

        <div class = Button>
            <button onclick="location.href='index.php'">Home</button>
        </div> 


    </div>
</body>
</html>
