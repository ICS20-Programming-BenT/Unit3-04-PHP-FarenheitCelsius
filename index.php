<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to Celsius in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-pink.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Fahrenheit to Celsius in PHP</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">
    
  		<!-- Web page heading and body text -->
      <?php 
  			echo "<h1>Converting Fahrenheit to Celsius with User Input</h1>";
  			echo "<p>Greetings! This web page will allow you to input the temperature of your choice in Fahrenheit to calculate the equivelent temperature in Celsius. See the image below for the formula that will be used.</p>";
  		?>
  
      <!-- Image -->
      <img src="./images/fahrenheit_to_celsius.png" alt="Formula Fahrenheit to Celsius">
      <br>
      <br>

      <!-- Body text -->
      <p>Please fill in the form below to indicate the temperature in degrees Fahrenheit (°F):</p>
  
  		<!-- User input form -->
      <form action="./calculations.php" method="post" target="result">
        <label for="temp-fahrenheit">Temperature in degrees Fahrenheit (°F):</label>
        <input type="number" step="0.01" id="temp-fahrenheit" placeholder="Temperature (°F)..." name="temp-fahrenheit"><br><br>
        <input type="submit" value="Convert to Celsius!">
      </form>
      <br>

      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>

      <!-- iframe for the results to show on the web page. -->
  		<iframe id="result" name="result">
  	  </iframe>
      <br>
      <br>
    </main>
  </body>
</html>