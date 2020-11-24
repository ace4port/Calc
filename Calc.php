<!DOCTYPE html>
<html>
<head>
	<title>Basic Calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<style>
		input[type=submit] {
  width: 100%;
  background-color: #4CA;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
	</style>
</head>
<body>
	<div class=".container-fluid">
		<h1>Calculator app using php</h1>
	</div>
	<div class=".container" style="background-color: lightgrey; border-radius: 2px 70px;width: 500px; border: 5px solid grey; padding: 50px; margin: 20px; text-align: center;">
		<p>Type your number and select operation</p>	
		<form method="POST">
		<input type="number" name="fstnum" style="width: 50px" required>
		<select id="calc" name="calc">
			<option value="add">+</option>
			<option value="minus">-</option>
			<option value="mul">*</option>
			<option value="divide">/</option>
			<option value="mod">MOD</option>
		</select>
		<input type="number" name="secnum" style="width: 50px" required><br><br>
		<input class="w3-button" type="submit" name="Submit">
		<p class="w3-panel w3-blue" style="height: 25px; text-align: center;">
		<?php  
			if(isset($_POST['Submit'])){
				$n1 = $_POST['fstnum'];
				$n2 = $_POST['secnum'];
				$op = $_POST['calc'];
				switch ($op) {
					case 'add':
						echo $n1.' + '.$n2.' = ';
						echo $n1+$n2;
						break;
					case 'minus':
						echo $n1.' - '.$n2.' = ';
						echo $n1-$n2;
						break;
					case 'mul':
						echo $n1.' X '.$n2.' = ';
						echo $n1*$n2;
						break;
					case 'divide':
						echo $n1.' / '.$n2.' = ';
						echo $n1/$n2;
						break;					
					case 'mod':
						echo $n1.' MOD '.$n2.' = ';
						echo $n1%$n2;
						break;
					default:
						echo "Pls enter a number to perform calculation";
						break;
				}
			}
		?></p></form>
	</div>


</body>
</html>
