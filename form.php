<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "comment_box";

//Making connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$fName = $_POST["fName"];

$lName = $_POST["lName"];

$email = $_POST["email"];

$textArea = $_POST['textArea'];

//Adding submitted data to database
$query = "INSERT INTO comment(comment) VALUES($textArea)";

$result = mysqli_query($conn, $query);

if (!$result){
	die("Database query failed");
}




;
echo "$fName";
echo"<p> $textArea </p>";
