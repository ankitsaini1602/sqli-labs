<!-- lab8.php (Second-order SQLi) -->
<?php include 'db.php'; ?>
<form method="POST">
  <input type="text" name="bio" placeholder="Enter bio">
  <button type="submit">Submit</button>
</form>
<?php
if (isset($_POST['bio'])) {
  $bio = $_POST['bio'];
  mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$bio', '123')");
}
$result = mysqli_query($conn, "SELECT * FROM users");
while ($row = mysqli_fetch_assoc($result)) echo "<p>{$row['username']}</p>";
?>