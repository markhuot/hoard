<?php

if (@$_POST['host'])
{
	$host = $_POST['host'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	
	die;
}

?>

<h1>Add New</h1>

<form action="/" method="post">
	<table border="1">
		<tr>
			<th>Host</th>
			<th>Username</th>
			<th>Password</th>
			<th>Database</th>
		</tr>
		<tr>
			<td><input type="text" name="host" value="localhost" /></td>
			<td><input type="text" name="user" /></td>
			<td><input type="text" name="pass" /></td>
			<td><input type="text" name="name" /></td>
		</tr>
	</table>
	<p>
		<input type="submit" value="Start backup" />
	</p>
</form>