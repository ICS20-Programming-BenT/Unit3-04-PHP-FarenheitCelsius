<?php
  //Get the user input
  $tempFahrenheit = floatval($_POST["temp-fahrenheit"]);

  //Perform mathematical equations and display
  $tempCelsius = 5 / 9 * ($tempFahrenheit - 32);
  $tempCelsiusRounded = round($tempCelsius, 1);
?>

<h3>Results:</h3>
When the temperature is <?php echo "$tempFahrenheit" ?>  degrees Fahrenheit, the temperature in Celsius will be <?php echo "$tempCelsiusRounded" ?> degrees.