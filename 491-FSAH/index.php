<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSAH</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="robot.css">
</head>
<body>

    <!-- Container for side panel button and search bar -->
    <div class="top-container">
        <!-- Button to open the side panel -->
        <div class="menu-button" onclick="openSidePanel()" style="cursor: pointer; font-size: 35px; color: orange;">☰</div>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search..." oninput="searchFunction()">
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
        <a href="page7.html" class="Panelbubble-button" data-name="Button 4">Bookmark</a>
        <a href="page8.html" class="Panelbubble-button" data-name="Button 5">Support</a>
    </div>

    <!-- Robot structure and animations -->
    <div class="face"></div>
    <div class="head"></div>
    <div class="body"></div>
    <div class="left-hand"></div>
    <div class="right-hand"></div>
    <div class="eye1"></div>
    <div class="eye2"></div>

    <!-- Robot introduction and website prompt -->
    <div class="robot-introduction">Hello, I'm Jerry!</div>
    <div class="website-prompt">Welcome to FSAH! This website is for......!</div>

    <script src="main.js"></script>

</body>
</html>
