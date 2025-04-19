<!-- lab4.php (Login Bypass) -->
<?php include 'db.php'; ?>
<form method="POST">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Login</button>
</form>
<?php
if (isset($_POST['username'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) echo "<p>Welcome, $user</p>";
  else echo "<p>Invalid credentials</p>";
}
?>