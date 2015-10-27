<!DOCTYPE html>
<html lang = en>
	<head>
	<title>Output for Employee Information</title>
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

		$sql = "select FName, LName, TelephoneNum, StNumber, StName, City, State, Zip
			 from Employee AS E, Item AS I
			 where I.UniqueID=$itemNum AND I.ESSN=E.SSN";
		$result = mysql_query($sql, $link);
		$numrows = mysql_numrows($result);

		for($i=0; $i<$numrows; $i++)
		{
		echo "Employee Information:"; 
		echo  "<br>";
		echo "Name: ", mysql_result($result, $i, 'FName');
		echo " ";
		echo mysql_result($result, $i, 'LName');
		echo "<br>";
		

		echo "Address: ", mysql_result($result, $i, 'StNumber');
		echo " ", mysql_result($result, $i, 'StName');
		echo " ", mysql_result($result, $i, 'City');
		echo " ", mysql_result($result, $i, 'State');
		echo " ", mysql_result($result, $i, 'Zip');
		echo "<br>";

		$str = mysql_result($result, $i, 'TelephoneNum');
		$arr1 = str_split($str,3);
		echo "Phone: "; //mysql_result($result, $i, 'TelephoneNum');
		echo "(";
		print_r($arr1[0]);
		echo ") ";
		print_r($arr1[1]);
		echo " - ";
		print_r($arr1[2]);
		print_r($arr1[3]);
		echo "<br><br>";
		}

		mysql_close($link);

	?>
	<a href="index.php">Back to Main Page</a>
	</body>
</html>
