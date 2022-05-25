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
<!-- Adding a button that displays the factorial of a positive integer -->
    <?php
    echo "<h1>Factorial of numbers program in PHP</h1>";
    ?>
    <?php
		echo "<h3>This program will display the factorial of a positive integer:</h3>";
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
					<form action="./results.php" method="post" target="results">			
						<label for="userNum">Enter a positive integer:</label>
						<input type="number" step="1" min="0" name="userNum"><br><br>		
						<input type="submit" value="Display factorial">
					</form>
				</td>
				<td valign="top" align="left">
<!-- adding an image -->
					<img src="./images/meadow.jpg" alt="Numbers" width="70%">
				</td>
			</tr>
		</table>	
		<!-- Create a space where the user information will be displayed -->
		<iframe name="results"></iframe>		
   </center>
  </body>
</html>