<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSAH</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <style>
        body
        {
            background: url("https://imageio.forbes.com/specials-images/imageserve/604bd0c6d9c87e3b8f59de0c/0x0.jpg?format=jpg&width=1200");
        }
    </style>
    
    <!-- Top bar with search bar and open side panel button -->
    <div class="top-bar">
        <!-- Open side panel button -->
        <div onclick="openSidePanel()" style="color: rgb(251, 156, 24); font-weight: bold;">☰</div>



        <!-- Search bar -->
        <input type="text" id="searchInput" class="search-bar" placeholder="Search...">

    </div>

    <!-- Bubble buttons container -->
    <div class="button-container">
        <!-- Bubble buttons (moved to the left) -->
        <a href="page1.html" class="bubble-button" data-name="Cal Grant A">Cal Grant A</a>
        <a href="page2.html" class="bubble-button" data-name="Cal Grant B">Cal Grant B</a>
        <a href="page3.html" class="bubble-button" data-name="Pell Grant">Pell Grant</a>

    </div>

    <div>
        <a href="page4.html" class="Newbubble-button" data-name="Federal Supplemental Educational Opportunity Grant (FSEOG)">FSEOG</a>
        <a href="page5.html" class="Newbubble-button" data-name="Middle Class Scholarship (MCS)">MCS</a>
        <a href="page6.html" class="Newbubble-button" data-name="button 3">button 3</a>
    </div>

    <!-- Side panel -->
    <div class="side-panel" id="sidePanel">
        <div class="close-button" onclick="closeSidePanel()">×</div>
        <a href="page7.html" class="Panelbubble-button" data-name="Button 4">Button 4</a>
        <a href="page8.html" class="Panelbubble-button" data-name="Button 5">Button 5</a>
        <!-- Add more buttons as needed -->
    </div>

    <script src="main.js"></script>
</body>
</html>
