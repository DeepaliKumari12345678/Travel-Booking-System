<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: travelbooking.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    <p>This is a protected area. You're logged in as <?php echo $_SESSION["user_id"]; ?>.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
