<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FSAH</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>

<div class="Home"> 
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
                <a href="page7.html" class="Newbubble-button">Federal Supplemental Educational Opportunity Grant</a>
                <a href="page8.html" class="Newbubble-button">Scholarships</a>
            </div>

                
            <!-- Side panel -->
            <div class="side-panel" id="sidePanel">

                <div class="close-button" onclick="closeSidePanel()"> </div>
                    
                
                <a href="page4.html" class="bubble-button">Middle Class Scholarship</a>
                <a href="page5.html" class="bubble-button">Loans</a>
                <!-- Add more buttons as needed -->
            </div>

            <script src="main.js"></script>

</div>


</body>
</html>
