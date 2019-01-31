<?php
$first_name=' ';
if(isset($_post['first_name']))
{
    $first_name=$_post['first_name'];
}
$Email_Id='';
if(isset($_post['Email_Id']))
{
    $Email_Id=$_post['Email_Id'];
}
$submit= ''; 
if(isset($_POST['submit']))
{
	$submit = $_POST['submit']; 
}	
	$submit= 'submitted successfully'; 
 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "priya";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "INSERT INTO Login (Name,Email)
	VALUES ('John','suhas.kaklij')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();




?>







<form methodr='post'>
<table>
<tr>
<td>fname</td>
<td><input type='text' name='first name' value='<?=$first_name?>' ></td>
</tr>
<tr>
<td>Email.id</td>
<td><input type='text' name='Email id' value='<?=$Email_Id?>'></td>
</tr>
<tr>
 <td>Submit:</td>
 <td><input type='submit' name='submit' value='submit'></td>
 </tr>
