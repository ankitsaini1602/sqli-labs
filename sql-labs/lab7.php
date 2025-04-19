<!-- lab7.php (Cookie-based Injection) -->
<?php
include 'db.php';
if (!isset($_COOKIE['user'])) setcookie('user', 'admin', time() + 3600);
$user = $_COOKIE['user'];
$query = "SELECT * FROM users WHERE username = '$user'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
echo "<p>Welcome back, {$row['username']}</p>";
?>
