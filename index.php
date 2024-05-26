<?php 
// Should be inserted to all pages that need user to be logged in to be viewed
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAVHOW</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <nav>
            <!-- Other navigation links can go here -->
            <?php if (isset($user_data)): ?>
                <span class="greeting">Madayaw, <?php echo htmlspecialchars($user_data['user_name']); ?></span>
                <a href="logout.php" class="logout-button">Logout</a>
            <?php else: ?>
                <a href="signup.php" class="signup-button"><!-- Your signup icon here --></a>
            <?php endif; ?>
        </nav>
    </header>
    <!-- Rest of your content here -->
</body>
</html>