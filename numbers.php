<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numbers</title>
</head>
<body>
  <h1>PHP Numbers</h1>
  <p>Integers, Float, and Number Strings</p>

  <?php 
    $firstNumber = 3;
    $secondNumber = 50;
    $thirdNumber = 3.65478;
    ?> <br>
    <p>
      <?php echo $thirdNumber + 9 - 3 ?>
    </p>
    <p>
      <?php echo 2 - 13 ?>
    </p>
    <p>
      <?php echo 13 / 2 ?>
    </p> 
    <!-- We can not divide any number by 0 -->
    <p>ceil() function:
      <?php echo ceil($thirdNumber) ?>
      <!-- output= 4  //This function accepts any float number as argument and rounds it up to the next highest integer -->
    </p> 
    <p>floor() function:
      <?php echo floor($thirdNumber) ?>
      <!-- output= 3  //returns the largest integer less than or equal to given parameter - the number to be rounded down -->
    </p> 
    <p>
      <?php echo "is ($firstNumber) : integer" . is_int($firstNumber);?>
    </p> 
    <!-- output: is 3 integer1 // one means true -->
    <p>
      <?php echo "is ($thirdNumber) : integer" . is_int($thirdNumber);?>
    </p>
    <!-- having nothing after integer in the output means 0 and this is equal false -->
    <p>
      <?php echo "is {$firstNumber} : integer" . is_float($firstNumber);?>
    </p> 
    <p>
      <?php echo "is {$thirdNumber} : integer" . is_float($thirdNumber);?>
    </p>
    <p>
      <?php echo "is {$firstNumber} : numeric" . is_numeric($firstNumber);?>
    </p> 
    <p>
      <?php echo "is {$thirdNumber} : numeric" . is_numeric($thirdNumber);?>
    </p>
    <p>Binary:
      <?php echo decbin(3);?>
    </p>
    <!-- decbin is use to convert a decimal number into a binary 
    Output = 11-->
    <p>Decimal
      <?php echo bindec(11);?>
    </p>
    <!-- bindec is use to convert a binary number into a decimal 
    Output = 3-->
    <p>Square root
      <?php echo sqrt(8);?>
    </p>
    <!--Use to calculate the square root of a given number.  -->
    <p>Absolute Value:
      <?php echo abs(-8 + 100);?>
    </p>
    <!-- return the absolute(positive) for a number this function is identical to what we call modulus in math...absolute of a negative number is positive 
    Output = 92-->
    <p>Power:
      <?php echo pow(2, 5);?>
    </p>
    <!-- returns x raised to the power of y
    2 * 2 * 2 * 2 * 2 = 32 -->
    <p>Modulas:
      <?php echo fmod(12.3, 3.1);?>
    </p>
    <!-- Parameters: The function takes two parameters as follows:

$dividend: This parameter takes a float which is to be divided.
$divisor: This parameter takes a float which is to be used as a divisor. -->
    <!-- example: Input :  $dividend = 2.7,  $divisor = 1.3;   
      Output : 0.1 -->
    <p>Random withing two variables: 
    <?php echo rand($firstNumber, $secondNumber);?>
    </p>
    <!-- returns a random number between the parameters -->
    <p>Random:
    <?php echo rand();?>
    </p>
    <!-- returns a random integer 10digits -->
    <?php
    $number = range(0, 5); 
    print_r ($number) ;?><br>
    <!-- create an array containing a range of elements from "0" to "5" -->
    add:<?php echo $secondNumber = $secondNumber + 2 ;?><br>
    add:<?php echo $secondNumber += 2 ;?><br>
    Increment:<?php $secondNumber++; echo $secondNumber ;?><br>
    Decrement:<?php $secondNumber--; echo $secondNumber;?><br>
    <?php  ;?>
  </body>
</html>