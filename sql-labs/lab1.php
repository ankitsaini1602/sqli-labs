<!-- lab1.php -->
<?php include 'db.php'; ?>
<form method="GET">
  <input type="text" name="id" placeholder="Enter Customer ID">
  <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM customers WHERE id = $id";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) echo "<p>{$row['name']} - {$row['email']}</p>";
}
?>