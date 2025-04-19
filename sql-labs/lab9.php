<!-- lab9.php (Search Field SQLi - POST) -->
<?php include 'db.php'; ?>
<form method="POST">
  <input type="text" name="search" placeholder="Search name">
  <button type="submit">Search</button>
</form>
<?php
if (isset($_POST['search'])) {
  $s = $_POST['search'];
  $query = "SELECT * FROM customers WHERE name LIKE '%$s%'";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) echo "<p>{$row['name']} - {$row['email']}</p>";
}
?>