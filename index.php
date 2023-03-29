<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area of a Trapezoid in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Area of a Trapezoid in PHP!</title>
  </head>
  <body>
		<!-- Web page heading and body text -->
    <?php 
			echo "<h1>Area of a Trapezoid in PHP</h1>";
			echo "<p>Welcome! This web page will use dimensions of your choice to calculate the area of a trapezoid. See the image below for the dimensions that need to be entered and the formula that will be used.</p>";
		?>

    <!-- Image -->
    <img src="./images/area-of-trapezoid.svg" alt="area trapezoid">
    <br>
    <br>

		<!-- User input form -->
    <form action="./calculations.php" method="post" target="result">
      <label for="height">Height of trapezoid (in cm):</label>
      <input type="number" step="0.001" id="height" placeholder="Height (cm)..." name="height-trapezoid"><br><br>
      <label for="side-a">Length of side a (in cm):</label>
      <input type="number" step="0.01" id="side-a" placeholder="Length of side a (cm)..." name="side-a-trapezoid"><br><br>
      <label for="side-b">Length of side b (in cm):</label>
      <input type="number" step="0.01" id="side-b" placeholder="Length of side b (cm)..." name="side-b-trapezoid"><br><br>
      <input type="submit" value="Calculate Area!">
    </form>
    <br>

		<!-- iframe for the results to show on the web page. -->
		<iframe id="result" name="result">			
	  </iframe>
    <br>
  </body>
</html>