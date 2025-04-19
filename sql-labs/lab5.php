<!-- lab5.php (Boolean-based Blind SQLi) -->
<?php include 'db.php'; ?>
<form method="GET">
  <input type="text" name="id" placeholder="Enter ID">
  <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM customers WHERE id = $id AND 1=1";
  $result = mysqli_query($conn, $query);
  echo mysqli_num_rows($result) > 0 ? "<p>Valid ID</p>" : "<p>No data found</p>";
}
?>
