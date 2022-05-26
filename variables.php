<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php 
    $name= 'Killua';
    $lastName= 'Zoldyck';
    $gender= 'Male';
    $age= 11;
    $height= '158cm';
    $weight='45kg';
    $birthday='July 7th';
    $eyeColor='Blue';
    $hairColor='Silver';
    $bloodType='A*';
    $state='Alive';
    ?>

    <h1><?php echo $name, ' ', $lastName;?></h1>
    <ul>
      <li>
        Gender:<?php echo ' ', $gender?>
      </li>
      <li>
        Age:<?php echo ' ', $age?>
      </li>
      <li>
        Height:<?php echo ' ', $height?>
      </li>
      <li>
        Weight:<?php echo ' ', $weight?>
      </li>
      <li>
        Birthday:<?php echo ' ', $birthday?>
      </li>
      <li>
        Eye Color:<?php echo ' ', $eyeColor?>
      </li>
      <li>
        Blood Type:<?php echo ' ', $bloodType?>
      </li>
      <li>
        State:<?php echo ' ', $state?>
      </li>
    </ul>

</body>
</html>