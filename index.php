<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    // Get the search query from the URL parameter
    $searchQuery = $_GET['query'];

    // Perform your search logic here (e.g., search a database or API)
    // Display the search results as needed
    echo "You searched for: " . htmlspecialchars($searchQuery);
    ?>
</body>
</html>
