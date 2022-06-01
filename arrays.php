<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Arrays</h1>
<!-- index = 34, 35, 36
    data = mooo, miii, maaa -->
  <?php
  $strawHats = array('Luffy', 'Jinbe', 'Sanji', 'Zoro', 'Usopp', 'Robin', 'Franky', 'Brook', 'Nami', 'Chopper');
  echo $strawHats[5];
  ?><br>
  <hr>
  <?php 
  $bounties = array(1500000000, 438000000, 330000000, 320000000, 200000000, 130000000, 940000000, 89000000, 66000000, 100)
  ?>
  <?php echo "$strawHats[0] has a bounty of $bounties[0] berries"; ?> <br>
  <?php echo "$strawHats[1] has a bounty of $bounties[1] berries"; ?> <br>
  <?php echo "$strawHats[2] has a bounty of $bounties[2] berries"; ?> <br>
  <?php echo "$strawHats[3] has a bounty of $bounties[3] berries"; ?> <br>
  <?php echo "$strawHats[4] has a bounty of $bounties[4] berries"; ?> <br>
  <?php echo "$strawHats[5] has a bounty of $bounties[5] berries"; ?> <br>
  <?php echo "$strawHats[6] has a bounty of $bounties[6] berries"; ?> <br>
  <?php echo "$strawHats[7] has a bounty of $bounties[7] berries"; ?> <br>
  <?php echo "$strawHats[8] has a bounty of $bounties[8] berries"; ?> <br>
  <?php echo "$strawHats[9] has a bounty of $bounties[9] berries"; ?>
  <hr>
  <?php
  $fourEmperors = array('Big Mom', array('Prometheus', 'Zeus', 'Napoleon'), 'Kaido', 'Shanks', 'Blackbeard');
    echo $fourEmperors[0];?>
    <?php echo $fourEmperors[1][0]?> 
    <?php echo $fourEmperors[1][1]?> 
    <?php echo $fourEmperors[1][2]?> 
    <!-- to get value of an array nested in an array -->

</body>
</html>