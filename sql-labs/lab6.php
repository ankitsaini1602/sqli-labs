<!-- lab6.php (Time-based Blind SQLi) -->
<?php include 'db.php'; ?>
<form method="GET">
  <input type="text" name="id" placeholder="Enter ID">
  <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT IF(1=1, SLEEP(3), 0) FROM customers WHERE id = $id";
  mysqli_query($conn, $query);
  echo "<p>If delayed, injection successful</p>";
}
?>
