<?php
$First_name=' ';
if(isset($_post['First_name']))
{
    $first_name=$_post['First_name'];
}

$Last_name=' ';
if(isset($_post['Last_name']))
{
    $Last_name=$_post['Last_name'];
}
$Phone_no=' ';
if(isset($_post['Phone_no']))
{
    $Phone_no=$_post['Phone_no'];
}
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

?>
 <form methodr='post'>
<table>
<tr>
<td>First name</td>
<td><input type='text' name='first name' value='<?=$first_name?>' ></td>
</tr>
<tr>
<td>Last name</td>
<td><input type='text' name='Last name' value='<?=$Last_name?>'></td>
</tr>
<td>Phone no:</td>
 <td><input type='text' name='phoneno'></td>
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