<!DOCTYPE html>
<html lang = en>
	<head>
		<title>SQL Form For Manager</title>
	</head>
	<body>

	<form name = "Manager" method = "POST" action = "Manager_Categories.php">
	
	Select an aisle number for information on the categories in the aisle: 
	
	<p>
	<select name="aisleNum">
 	<option value="">Select...</option>
  	<option value="4">4</option>
  	<option value="5">5</option> 
  	<option value="6">6</option>
	<input type="submit" name = "Submit" value = "Submit"/>

	</select>
	</p>
	</form>
	
	<form name = "Manager" method = "POST" action = "Manager_Customer.php">
	Enter a zipcode to list the total number of customers:
	<p>
	<select name="zipCode">
	<option value="">Select...</option>
	<option value="92834">92834</option>
	<input type="submit" name = "Submit" value = "Submit"/>
	</p>
	</form>
	</body>
</html>
