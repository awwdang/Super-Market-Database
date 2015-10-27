<html lang = en>
	<head>
	<title>Manager Query</title>
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

		$aisle = $_POST['aisleNum'];

		$sql = "select Name, FName, LName from Categories C, Employee E where $aisle = C.AisleNumber AND C.UniqueID=E.CatUniqueID";
		$result = mysql_query($sql, $link);
		$numrows = mysql_numrows($result);

		for($i=0; $i<$numrows; $i++)
		{
		echo "Category Name: ", mysql_result($result,$i,'Name');
		echo "<br>";
		echo "Manager: ", mysql_result($result, $i, 'FName');
		echo " ";
		echo mysql_result($result, $i, 'LName');
		echo "<br><br>";
		}

		mysql_close($link);

	?>
	<a href="index.php">Back to Main Page</a>
	</body>
</html>
