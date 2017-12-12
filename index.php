<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les boucles exercice 2</title>
  </head>
  <body>
<?php
$number = 0;
$number2 = rand(0, 99);
while($number < 20){
  echo '<p>' .$number * $number2. '</p>';
  $number++;
};
?>
  </body>
</html>
