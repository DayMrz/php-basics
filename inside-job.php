<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inside Job</title>
</head>
<body>
  
  <?php ?>
  <?php $numbers = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20)?>
  <?php print_r($numbers); ?> <hr>
  <?php 
    echo current($numbers) . "<br>";
    next($numbers);
    echo current($numbers) . "<br>";
    next($numbers);
    echo current($numbers) . "<br>";
    next($numbers);
    next($numbers);
    echo current($numbers) . "<br>";
    reset($numbers);
    echo current($numbers) . "<br>";
    end($numbers);
    echo current($numbers) . "<br>";
    next($numbers);
    echo current($numbers) . "<br>";
    // any statement 
  ?>

</body>
</html>