<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constants</title>
</head>
<body>
  <h1>Mathematical Constants</h1>

  <?php ?> 
  <?php 
    $Name=45;
    define('Value_of_Pi', 3.14159);
    define('Value_of_Gravity', 9.806);
  ?>
    
    <ul>
      <li>Pi: <?php echo ' ', Value_of_Pi ?></li>
      <li>Gravity: <?php echo ' ', Value_of_Gravity ?></li>
    </ul>
</body>
</html>