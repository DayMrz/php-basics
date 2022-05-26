<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>
<body>
  <h1>The God of High School</h1>
  <?php 
    echo 'Jin Mori (진모리, Jin Mori; "Mori Jin") is the main protagonist of The God of High School. He is introduced as an arrogant, carefree child obsessed with fighting. <br>';
    echo 'However his true identity is that of the great God Sun Wukong (The Monkey King), the leader of the Mount Hwagwa Monkey and one of the Nine Kings of the Sage Realm.';
    $age = 17;
    $raceSpecies = ['God', 'Demon', 'Mount Hwagwa Monkey'];
    $occupation = ['G.O.H. Participant', 'Student', 'Monkey King', 'Supreme God'];
    $statement1 = 'He cannot be defeated by human beings as he is not human himself.';
    $statement2 = 'To truly defeat him, another Demon or God would have to do that.';
    $combination = $statement1.' '.$statement2;
    echo $combination 
  ?>
  <ul>
    <li>
      <?php echo $age?>
    </li>
    <li>
      <?php 
        foreach($raceSpecies as $value) {
          echo $value, ',', ' ';
        } 
      ?>
    </li>
    <li>
      <?php 
        foreach($occupation as $value) {
          echo $value, ',', ' ';
        }
      ?>
    </li>
  </ul>
  <p>*Double quote examples*</p>
  <ul>
    <li>
      <?php 
        echo 'his age is $age <br>';  //single quote with a nested variable prints out an string 
        echo "his age is $age <br>"; //double quote with a nested variable prints out a string with the proper value of the variable
      ?>
    </li>
  </ul>
</body>
</html>