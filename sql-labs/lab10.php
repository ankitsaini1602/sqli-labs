<!-- lab10.php (WAF Bypass) -->
<?php include 'db.php'; ?>
<form method="GET">
  <input type="text" name="input" placeholder="Enter ID">
  <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['input'])) {
  $input = str_ireplace(['select', '--'], '', $_GET['input']);
  $query = "SELECT * FROM customers WHERE id = $input";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) echo "<p>{$row['name']} - {$row['email']}</p>";
}
?>
