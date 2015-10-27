<!DOCTYPE html>
<html lang = en>
	<head>
		<title>Output For The Category of Item</title>
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

		$sql = "select C.Name, FName, LName
			 from Item AS I, Categories AS C, Employee AS E
			 where I.UniqueID=$itemNum AND I.ESSN=E.SSN AND E.CatUniqueID=C.UniqueID;";
		$result = mysql_query($sql, $link);
		$numrows = mysql_numrows($result);

		for($i=0; $i<$numrows; $i++)
		{
		echo "Category Name: ", mysql_result($result,$i,'C.Name');
		echo "<br>";
		echo "Employee in Charge of Arrangement: ", mysql_result($result, $i, 'FName');
		echo " ", mysql_result($result, $i, 'LName');
		echo "<br><br>";
		}

		mysql_close($link);

	?>
	<a href="index.php">Back to Main Page</a>
	</body>
</html>
