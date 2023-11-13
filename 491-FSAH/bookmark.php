<?php
// bookmark.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pageName = $_POST['pageName'];

    // Check if the session bookmark array is set, if not, create it
    if (!isset($_SESSION['bookmarks'])) {
        $_SESSION['bookmarks'] = array();
    }

    // Add the new bookmark
    $_SESSION['bookmarks'][$pageName] = $pageName;

    // You could also use a database to save the bookmarks if needed

    echo "Bookmark saved";
} else {
    echo "Invalid request";
}
?>

<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Bookmarks</title>
<link rel="stylesheet" href="CSS/bookmark.css">
</head>
<body>
  <h1>My Bookmarks</h1>

  <div id="bookmarksList">
    <?php
    if (isset($_SESSION['bookmarks'])) {
        foreach ($_SESSION['bookmarks'] as $bookmark) {
            echo "<div>" . htmlspecialchars($bookmark) . "</div>";
        }
    }
    ?>
  </div>

</body>
</html>
