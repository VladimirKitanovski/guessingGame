<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guessing Game</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>
    <p>
    <?php

      if ( ! isset($_GET['guess']) ) {
          echo("Missing guess parameter");
      } else if ( strlen($_GET['guess']) < 1) {
          echo("Your guess is too short");
      } else if ( ! is_numeric($_GET['guess']) ) {
          echo("Your guess is not a number");
      } else if ( $_GET['guess'] > 69 ) {
          echo("Your guess is too low");
      } else if ( $_GET['guess'] < 69) {
          echo("Your guess is to high");
      } else if ( $_GET['guess'] > 0 || $_GET['guess'] < 99) {
          echo("Please try again guessing a number from 0 to 99");
      } else {
          echo("Congratulations - You are right");
      }
      
    ?>
    </p>
</body>
</html>