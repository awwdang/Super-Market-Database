<!DOCTYPE html>
<html lang = en>
	<head>
		<title>Output For Manager Query (b)</title>
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

		$zip = $_POST['zipCode'];

		$sql = "select COUNT(*)
			from Customer
			where Zip=$zip";
		$result = mysql_query($sql, $link);
		$numrows = mysql_numrows($result);

		for($i=0; $i<$numrows; $i++)
		{
		echo "Total number of customers in zipcode " . $zip . "  :  ", mysql_result($result,$i);
		echo "<br><br>";
		}

		mysql_close($link);

	?>
	<a href="index.php">Back to Main Page</a>
	</body>
</html>
