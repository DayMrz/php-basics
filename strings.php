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
  <h2>Jin Mori</h2>
  <p>
    <?php 
      echo 'Jin Mori (진모리, Jin Mori; "Mori Jin") is the main protagonist of The God of High School. He is introduced as an arrogant, carefree child obsessed with fighting. <br>';
      echo 'However his true identity is that of the great God Sun Wukong (The Monkey King), the leader of the Mount Hwagwa Monkey and one of the Nine Kings of the Sage Realm.';
    ?>
  </p>
  <?php 
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
  <hr>
  <p>*Concatenation examples*</p>
  <h2>Yu Mira</h2>
  <?php 
    $paragraph1 = 'Yu Mira (유미라, Yu Mira; "Mira Yu"Mira yoo) is one of the three protagonists of The God of High School, and is the 25th Master of the Moon Light Sword Style.';
    $paragraph2 = 'She was invited to participate in the God Of High School Tournament. During the World Tournament and RagnarÖk, she received Original Greed and through it Ultio R bequeath her Okhwangs physical power (which he had previously stolen)';
    $combine = $paragraph1 ;
    $combine .= $paragraph2;
    ?>
  <p>
    <?php echo $combine?>
  </p> 
    <br>
  <h3>Appearance</h3>
  <span>*string functions examples*</span>
    <?php 
    $paragraph1 = 'initially, Mira had reddish brown, shoulder-length hair and generally wore round spectacles.';
    $paragraph2 = 'she was usually seen wearing a full-sleeved tee along with a mini skirt during and outside of battles.';
    $combine = $paragraph1 ;
    $combine .= $paragraph2;
    ?>
  
  <p>
    Uppercase first: <br><?php echo ucfirst($combine); ?>
  </p>
  <p>
    Uppercase words: <br> <?php echo ucwords($combine); ?>
  </p>
  <p>
    Lowercase: <br> <?php echo strtolower($combine); ?>
  </p>
  <p>
    Lowercase to uppercase: <br> 
    <?php echo strtoupper($combine); ?>
  </p>
  <hr>
  <p>
    Repeat: <br>
    <?php echo str_repeat($combine, 2); ?>
  </p>
  <p>
    Make substring from one point to another: <br>
    <?php echo substr($combine, 0, 10); ?>
  </p>
  <!-- string from 0,1,2,3... -->
  <p>
    Find Position of any specific word: <br>
    <?php echo strpos($combine, 'i'); ?> 
  </p> <!-- finds the position of the first occurrence of a string inside another string. -->
  <p>
    Find Character: <br>
    <?php echo strchr($combine, 'f'); ?>
  </p>
    <!-- //find the first character with that condition, prints the string after that character.  -->


  <ul>
    <li>
      
    </li>
  </ul>
</body>
</html>