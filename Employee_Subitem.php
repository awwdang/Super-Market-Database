<!DOCTYPE html>
<html lang = en>
	<head>
	<title>Output For Subitem Quantity</title>
	</head>

	<body>
	<?php
		$servername = "ecsmysql";
		$username = "cs332s11";
		$password = "ahngiesu";		
		$dbname = $username;
		$link = mysql_connect($servername, $username, $password);

		//Create connection
		if(!$link)
		{
			die('Error:' . mysql_error());
		}

		mysql_select_db($dbname, $link);

		$itemNum = $_POST['itemNum'];

		$sql = "select SubItemNum, Quantity
			from SubItem AS S, Item AS I
			where I.UniqueID=$itemNum AND I.UniqueID=S.IUniqueID";		
		
		$result = mysql_query($sql, $link);
		$numrows = mysql_numrows($result);

		echo "Subitem Information:";
		echo "<br><br>";
		for($i=0; $i<$numrows; $i++)
		{ 
		echo "Subitem Number: ", mysql_result($result, $i, 'SubItemNum');
		echo "<br>";
		echo "Quantity Left: ", mysql_result($result, $i, 'Quantity');
		echo "<br><br>";
		}

		mysql_close($link);

	?>
	<a href="index.php">Back to Main Page</a>
	</body>
</html>
