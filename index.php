<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="using factorials">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to CSS file sheet -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Factorials in PHP</title>
  </head>
  <body>
   <center>
<!-- Adding a JavaScript button that displays factorials -->
    <?php
    echo "<h1>Factorials of numbers program in PHP</h1>";
    ?>
    <?php
		echo "<h3>This program will display factorials of a number:</h3>";
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
					<form action="./results.php" method="post" target="results">			
						<label for="userNum">Enter a maximum number:</label>
						<input type="number" step="1" id="maxNum"><br><br>		
            <label for="userNum">Enter a minimum number:</label>
						<input type="number" step="1" id="minNum"><br><br>		
						<input type="submit" value="Display Numbers">
					</form>
				</td>
				<td valign="top" align="left">
<!-- adding an image -->
					<img src="./images/meadow.jpg" alt="Numbers" width="70%">
				</td>
			</tr>
		</table>	
		<!-- Create a space where the user information will be displayed -->
		<div id="display-results">			
		</div>
   </center>
  </body>
</html>