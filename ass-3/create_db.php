<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection Error: " . mysqli_connect_error());
}

$sql = "CREATE TABLE student
(
   name varchar(55),
   id int,
   attendance int,
   quiz int,
   final int
)";


if(mysqli_query($conn, $sql)){
	echo "success!!!";
}else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);