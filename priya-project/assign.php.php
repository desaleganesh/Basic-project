<?php
$Full_name=' ';
if(isset($_post['Full_name']))
{
    $Full_name=$_post['Full_name'];
}

$all_hobbies = '';
if (isset($_POST['hobbies']))
{
	$hobbies = $_POST['hobbies'];
	for ($i=0; $i<count($hobbies);$i++)
	{
		$all_hobbies .= $hobbies[$i] . ',';
	}
}
echo $all_hobbies;

$Address=' ';
if(isset($_post['Address']))
{
    $Address=$_post['Address'];
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
<td>Full name</td>
<td><input type='text' name='Full name' value='<?=$Full_name?>' ></td>
</tr>
 <td>Hobbies:</td>
        <td>Reading:<input type='checkbox' name='hobbies[]' value='reading'></td>
        <td>dancing: <input type='checkbox' name='hobbies[]' value='dancing'></td>
		<td>traveling:<input type='checkbox' name='hobbies[]' value='traveling'></td>
		</tr>
 <tr>
<td>Address:</td>
 <td><textarea name='address' cols='10' rows='5'></textarea></td>
 </tr>
 <tr>
 <td>Submit:</td>
 <td><input type='submit' name='submit' value='submit'></td>
 </tr>
 </table>
</form>
