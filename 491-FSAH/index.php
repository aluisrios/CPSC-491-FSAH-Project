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
        <div  onclick="openSidePanel()">☰</div>

        <!-- Search bar -->
        <input type="text" class="search-bar" placeholder="Search...">
    </div>

    <!-- Bubble buttons container -->
    <div class="button-container">
        <!-- Bubble buttons (moved to the left) -->
        <a href="page1.html" class="bubble-button">Cal Grant A</a>
        <a href="page2.html" class="bubble-button">Cal Grant B</a>
        <a href="page3.html" class="bubble-button">Pell Grant</a>
    </div>

    <div>
        <a href="page6.html" class="Newbubble-button">State Grant</a>
        <a href="page7.html" class="Newbubble-button">button 2</a>
        <a href="page8.html" class="Newbubble-button">button 3</a>
    </div>

    <!-- Side panel -->
    <div class="side-panel" id="sidePanel">
        <div class="close-button" onclick="closeSidePanel()">×</div>
        <a href="page4.html" class="bubble-button">Button 4</a>
        <a href="page5.html" class="bubble-button">Button 5</a>
        <!-- Add more buttons as needed -->
    </div>

    <script src="main.js"></script>
</body>
</html>