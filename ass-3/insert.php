<!DOCTYPE html>
<html lang="en">
  <head>
    <title>190104054 Assignment-03</title>
    <link rel="stylesheet" href="table.css"/>
  </head>

  <body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection Error: " . mysqli_connect_error());
}

$sql = "INSERT INTO student(name, id, attendance, quiz, final)
	VALUES (
        	'$_POST[name]',
        	'$_POST[id]',
        	'$_POST[att]',
        	'$_POST[quiz]',
        	'$_POST[final]'
        )";




if(mysqli_query($conn, $sql)){
	$sql2 = "SELECT * FROM student";
	$result = mysqli_query($conn, $sql2);
	echo "<table border='0'>";
	echo "<tr> <th>Name</th>
	<th>ID</th>
	<th>Attendance</th>
	<th>Quiz</th>
	<th>Final Exam</th> </tr>";

	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['attendance']."</td>";
			echo "<td>".$row['quiz']."</td>";
			echo "<td>".$row['final']."</td>";
			echo "</tr>";
		}
	}

	echo "<button class=\"submit_btn\" onclick=\"location.href='form.php'\">Go Back</button>";


}else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>


  </body>
</html>