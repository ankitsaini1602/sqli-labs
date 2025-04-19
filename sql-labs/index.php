<!DOCTYPE html>
<html>
<head>
  <title>SQL Injection Labs</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>SQL Injection Training Labs</h1>
    <ul>
      <?php
      for ($i = 1; $i <= 10; $i++) {
        echo "<li><a href='lab$i.php'>Lab $i</a></li>";
      }
      ?>
    </ul>
  </div>
</body>
</html>
