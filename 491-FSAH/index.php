<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSAH</title>
    <link rel="stylesheet" href="CSS/styles.css" >
    <link rel="stylesheet" href="CSS/robot.css">
</head>
<body>

<div class="top-container">
    <!-- Side Panel Button -->
    <div class="menu-button" onclick="openSidePanel()">☰</div>

    <!-- Search Bar -->
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." oninput="searchFunction()">
    </div>

    <!-- Home and Sign Up/Log out Buttons -->
    <div class="top-right-buttons">
        <button onclick="location.href='HomePage.php'">Home</button>
        <button onclick="location.href='LoginPage.php'">Log out</button>
    </div>
</div>

<!-- Bubble buttons container -->
<div class="button-container">
    <a href="page1.html" class="bubble-button" data-name="Cal Grant A">Cal Grant A</a>
    <a href="page2.html" class="bubble-button" data-name="Cal Grant B">Cal Grant B</a>
    <a href="page3.html" class="bubble-button" data-name="Pell Grant">Pell Grant</a>
    <a href="page4.html" class="bubble-button" data-name="FSEOG">FSEOG</a>
    <a href="page5.html" class="bubble-button" data-name="MCS">MCS</a>
    <a href="page6.html" class="bubble-button" data-name="SUG">SUG</a>
</div>

<!-- Side panel -->
<div class="side-panel" id="sidePanel">
    <div class="close-button" onclick="closeSidePanel()">×</div>
    <a href="profile.php" class="Panelbubble-button" data-name="profile">Profile</a>
    <a href="supportPage.html" class="Panelbubble-button" data-name="Support">Support</a>
    <a href="page8.html" class="Panelbubble-button" data-name="Bookmark">Bookmark</a>
    <a href="page9.html" class="Panelbubble-button" data-name="filter">Filter</a>
</div>

<!-- Flex container for robot and messages -->
<div class="robot-and-messages">
    <!-- Robot structure and animations -->
    <div class="robot">
        <div class="face"></div>
        <div class="head"></div>
        <div class="body"></div>
        <div class="left-hand"></div>
        <div class="right-hand"></div>
        <div class="eye1"></div>
        <div class="eye2"></div>
    </div>

    <!-- Container for messages -->
    <div class="messages">
        <div class="robot-introduction">Hello, I'm Jerry!</div>
        <div class="website-prompt">Welcome to FSAH! Here at Financial Student Aid Helper (FSAH), we're all about helping you get through college with as little debt as possible. 
        We've gathered every financial aid option available in your school to make finding and applying for assistance easy and quick—no more waiting weeks for advisor appointments. 
        With FSAH, you're on track to land your dream job after graduation without the heavy burden of student loans!</div>
        <!-- Next button -->
        <button id="next-button" style="display: none;">Next</button>
        <div class="additional-info">
            Do you need help with anything? Yes or No?
            <div class="button-container">
                <button id="yes-button">Yes</button>
                <button id="no-button">No</button>
            </div>
        </div>

        <!-- This will be hidden initially and only shown when "Yes" is clicked -->
        <div class="help-message" style="display: none;">
            How can I help you?
            <div class="help-buttons">
                <button id="filter">Filter</button>
                <button id="support">Support</button>
                <button id="profile">Profile</button>
                <button id="continue">Continue</button>
            </div>
        </div>
    </div>
</div>

<script src="scripts/main.js"></script>
</body>
</html>
