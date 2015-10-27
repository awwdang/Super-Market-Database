<!DOCTYPE html>
<html lang = en>
	<head>
		<title>Output For Subitem Info</title>
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

		$sql = "SELECT S.SubItemNum, RetailPrice, Quantity, M.Name
			FROM Item AS I, SubItem AS S, Manufacturer AS M
			WHERE I.UniqueID=$itemNum AND I.UniqueID=S.IUniqueID AND S.SubItemNum=M.SubItemNum;";
		$result = mysql_query($sql, $link);
		$numrows = mysql_numrows($result);

		for($i=0; $i<$numrows; $i++)
		{
		echo "Subitem Number: ", mysql_result($result,$i,'S.SubItemNum');
		echo "<br>";
		echo "Price: ", mysql_result($result, $i, 'RetailPrice');
		echo "<br>";
		echo "Manufacturer: ", mysql_result($result, $i, 'M.Name');
		echo "<br>";
		echo "Quantity left: ", mysql_result($result, $i, 'Quantity');
		echo "<br><br>";
		}

		mysql_close($link);

	?>
	<a href="index.php">Back to Main Page</a>
	</body>
</html>
