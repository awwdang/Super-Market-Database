<!DOCTYPE html>
<html lang = en>
	<head>
	<title>SQL Form For Employee Who Is In Charge of Managing A Category</title>
	</head>
	<body>

	<form name = "Employee" method = "POST" action = "Employee_Employee.php">
	Select item number for information of employee who takes care of the supply:
	
	<p>
	<select name="itemNum">
 	<option value="">Select...</option>
  	<option value="109831">109831</option>
  	<option value="109832">109832</option>
	<option value="109841">109841</option>
	<option value="109842">109842</option>
	<option value="109851">109851</option>
       <option value="109852">109852</option>
	<input type="submit" name = "Submit" value = "Submit"/>
	</select>
	</p>
	</form>

	<form name = "Employee" method = "POST" action = "Employee_Subitem.php">
	Select item number for information on subitem quantity:
	
	<p>
	<select name="itemNum">
 	<option value="">Select...</option>
  	<option value="109831">109831</option>
  	<option value="109832">109832</option>
	<option value="109841">109841</option>
	<option value="109842">109842</option>
	<option value="109851">109851</option>
       <option value="109852">109852</option>
	<input type="submit" name = "Submit" value = "Submit"/>
	</select>
	</p>
	</form>

	</body>
</html>
