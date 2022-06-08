<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Statements</title>
</head>
<body>
  <h1>Conditional Statements</h1>
  
  <?php ?>

  <h2>Ternary Operator</h2>
  <?php 
    $weather = 'Sunny';
    echo ($weather == 'Sunny') ? 'Weather is pleasant' : 'I am not going out today';
  ?>
  <br>
  <?php 
    $result = 62;
    echo ($result === 20) ? 'Weather is pleasant' : 'I am not going out today' ;
  ?>
  <br>
  <h2>if statement</h2>

  <?php 
    $weather1 = 'Windy';
    if($weather1 == 'Sunny') {
      echo 'Weather is pleasant <br>';
    } elseif ($weather1 == 'Rainy') {
      echo 'oh no! do not go out!';
    }elseif ($weather1 == 'Windy') {
      echo 'wear a coat, please!';
    }else {
      echo 'being at home is better';
    }
  ?>
  <br>
  <?php 
  $luffy = 'Defeats Kaido';
  if ($luffy == 'Defeats Kaido')
    echo 'he become the king of the pirates';
  ?>
  <br>
  <?php
  $t = date('H');

  if ($t < '20') {
    echo 'Have a good day!';
  } else {
    echo 'Have a good night!';
  }
  ?>
  <br>
  <?php 
  $count = 10;
  if ($count >= 20) {
    echo 'you got a good number';
  } else {
    echo 'this number is too short :(';
  }
  ?>
  <br>

  <?php 
  $Bought_Product = false;
  if($Bought_Product) {
    echo '<h3>Thank You!</h3>';
    echo '<p>this product will be dispatch soon</p>';
  } else {
    echo '<h3>We have not yet received your payment</h3>';
    echo '<p>check your shopping cart</p>';
  }
  ?>

  <br>

  <?php 
    $a = 4;
    $b = 3;
    $c = 'cannot be out';
    if($b < 5 && $a > 0) {
      $c = $a/$b;
    } echo $c;
  ?>
  
  <hr>


  <?php 
  for($i = 0 ; $i<=10 ; $i++) {
    if($i < 10) {
      echo "$i-";
    } else {
      echo "$i" . "\n";
    }
  }

  ?>

</body>
</html>