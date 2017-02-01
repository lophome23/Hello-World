
<html>
<head>
<style>
	body{
		background-color: Red;
	}
	h1{
		color: White;
	}
	.btn {
		padding: 10px 10px 10px 10px;
	}
</style>	
<title>Login</title>
</head>
<body>
<br>
<br>
<br>
<br>
<center><h1><b>Login Form</b></h1></center>
<tr>
<th>
<td><center>
<div class="btn-group btn-group-justified">
<form action="#" method="post">
<b>Username: <input type="text" name="username">
<br><br>
Password: <input type="password" name="password">
</b>
</td>
</center>
</th>
</tr>
</table>
<center><br><input type="submit" name="submit" value= "Submit" class="btn">
</form>
<?php
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$c= oci_connect($username,$password,"localhost/XE");
  		if(!$c){
			$e = oci_error();
			trigger_error('Could not connect to database: '.$e['message'] , E_USER_ERROR);
  		}
  		else{
  			header("Location: index.php");
  		}
	}
?>	
</body>
</html>